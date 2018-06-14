if (typeof Object.create !== 'function') {
    Object.create = function (obj) {
        function F() {};
        F.prototype = obj;
        return new F();
    };
};




(function ($, window, document, undefined) {
    var TOTAL_TWFEEDS_LOADED;
    var TOTAL_INSTAFEEDS_LOADED;
    $.fn.socialfeed = function (options) {



        var defaults = {
            //			TOTAL_TWFEEDS_LOADED: 0,
            //			TOTAL_INSTAFEEDS_LOADED: 0,
            //			default_image_url: "img/social-media-default-bg.jpg",
            plugin_folder: '', // a folder in which the plugin is located (with a slash in the end)
            template: '_includes/social-feed/_post-template.html', // a path to the tamplate file
            default_image_url: "img/social-media-default-bg-babcans-brdr.jpg",
            show_media: false, // show images of attachments if available
            index_offset: 0,
            user_access_token,
            user_id,
            onParseDataComplete: null, //custom -- htmlangdon - calls function on social-feed.js instead of post.render()...
            length: 500 // maximum length of post message shown
        };
        //---------------------------------------------------------------------------------
        var options = $.extend(defaults, options),
            container = $(this),
            template,
            index_offset,
            user_access_token,
            user_id,
            onParseDataComplete,
            social_networks = ['facebook', 'vk', 'google', 'blogspot', 'twitter'];
//            social_networks = ['facebook', 'instagram', 'vk', 'google', 'blogspot', 'twitter'];
        



        container.empty().css({
            display: 'inline-block',
            width: '100%'
        });
        //---------------------------------------------------------------------------------

        //---------------------------------------------------------------------------------
        // This function performs consequent data loading from all of the sources by calling corresponding functions

        function fireCallback() {
            var fire = true;
            /*$.each(Object.keys(loaded), function() {
                if (loaded[this] > 0)
                    fire = false;
            });*/
            if (fire && options.callback)
                options.callback();
        }
        var Utility = {
            request: function (url, callback) {
                $.ajax({
                    url: url,
                    dataType: 'jsonp',
                    success: callback
                });
            },

            get_request: function (url, callback) {
                $.get(url, callback, 'json');
            },
            wrapLinks: function (string, social_network) {
                var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
                if (social_network === 'google-plus') {
                    string = string.replace(/(@|#)([a-z0-9_]+['])/ig, Utility.wrapGoogleplusTagTemplate);
                } else {
                    string = string.replace(exp, Utility.wrapLinkTemplate);
                }
                return string;
            },
            wrapLinkTemplate: function (string) {
                return '<a target="_blank" href="' + string + '">' + string + '<\/a>';
            },
            wrapGoogleplusTagTemplate: function (string) {
                return '<a target="_blank" href="https://plus.google.com/s/' + string + '" >' + string + '<\/a>';
            },
            shorten: function (string) {
                string = $.trim(string);
                if (string.length > options.length) {
                    return jQuery.trim(string).substring(0, options.length).split(" ").slice(0, -1).join(" ") + "...";
                } else
                    return string;
            },
            stripHTML: function (string) {
                if (typeof string === "undefined" || string === null)
                    return '';
                return string.replace(/(<([^>]+)>)|nbsp;|\s{2,}|/ig, "");
            }
        }

        function SocialFeedPost(social_network, data) {
            this.content = data;
            this.content.attachment = (this.content.attachment == undefined) ? '' : this.content.attachment;
            this.content.time_ago = data.dt_create.fromNow();
            this.content.dt_create = this.content.dt_create.valueOf();
            this.content.text = Utility.wrapLinks(Utility.shorten(data.message + ' ' + data.description), data.social_network);
            this.content.moderation_passed = (options.moderation) ? options.moderation(this.content) : true;

            Feed[social_network].posts.push(this);
        }
        SocialFeedPost.prototype = {
            onThisDataRendered: null,
            render: function () {

                /////
                var rendered_html = Feed.template(this.content);
                var data = this.content;






                if ($(container).children('[social-feed-id=' + data.id + ']').length != 0) {
                    return false;
                }

                if ($(container).children().length == 0) {
                    $(container).append(rendered_html);
                } else {
                    var i = 0;
                    insert_index = -1;
                    $.each($(container).children(), function () {
                        if ($(this).attr('dt-create') < data.dt_create) {
                            insert_index = i;
                            return false;
                        }
                        i++;
                    });
                    $(container).append(rendered_html);
                    if (insert_index >= 0) {
                        insert_index++;
                        var before = $(container).children('div:nth-child(' + insert_index + ')'),
                            current = $(container).children('div:last-child');
                        $(current).insertBefore(before);
                    }

                    if (this.onThisDataRendered == null) {
                        return;
                    }
                    var alwaysVisibleContent = data.content_always_visible;

                    if (alwaysVisibleContent) {
                        console.log("");
                        console.log("----------<ALWAYS VISIBLE SOCIAL FEED ELEMENT CONTENT>---------");
                        console.log("");
                        var __SFElement = $(container).children()[i];
                        $(__SFElement).addClass("always-visible-content");
                        console.log(__SFElement);
                        console.log("");
                        console.log("----------</ALWAYS VISIBLE SOCIAL FEED ELEMENT CONTENT>---------");
                        console.log("");
                    }
                    this.onThisDataRendered(this);
                }

                //////////////////////////////
                /////////render function end
                //////////////////////////////
            },
            setContentRenderedHandler: function (xFuncHandler) {
                this.onThisDataRendered = xFuncHandler;
            },
            getIsContentAlwaysVisible: function () {
                return;
            }
        }

        var Feed = {
            template: false,
            init: function () {
                Feed.getTemplate(function () {
                    social_networks.forEach(function (network) {
                        // if social media site is used, do this thing:
                        if (options[network]) {
                            //for each different social media network accounts, loop.
                            options[network].accounts.forEach(function (account) {
                                console.log("ACCOUNT")
                                console.log("ACCOUNT")
                                console.log("ACCOUNT")
                                console.log(account)
                                console.log("ACCOUNT")
                                console.log("ACCOUNT")
                                console.log("ACCOUNT")
                                console.log("ACCOUNT")
                                //loops through each account name, calling:
                                Feed[network].getData(account);
                                //which loops through the number of posts desired (limit)
                            });
                        }
                    });
                });
            },
            getTemplate: function (callback) {
                if (Feed.template)
                    return callback();
                else {

                    if (options.template_html) {
                        Feed.template = doT.template(options.template_html);
                        return callback();
                    } else {
                        $.get(options.template, function (template_html) {
                            Feed.template = doT.template(template_html);
                            return callback();
                        });
                    }


                }
            },
            twitter: {
                posts: [],
                loaded: false,
                api: 'http://api.tweecool.com/',
                getData: function (account) {
                    var cb = new Codebird();
                    var params = {
                        count: options.twitter.limit
                    };
                    cb.setConsumerKey("5AbguEzlZtQWxPTPflPsqwRB5", "PKqvcpYWqnRZjT5190TitJOMYvpfVyPbjjfqeSGdOzReHkJwq8");
                    cb.setToken("3131064881-DMTvkyQDWDMAdQDg0ZuJgygb3YJQYFhcsdGrrH9", "bjTcgEymGo7tg2wvxYv9v7mfIANTExlJysCphQe2yYsWx");
                    cb.__call(
                        "statuses_userTimeline",
                        params,
                        function (reply) {
                            // limit should only be what the limit is set as in 'social-feed.js'
                            // for some reason, status timeline pulls ALL user data....can't add 'count' or 'limit' (or ANY var @end of URL for that matter)
                            var __replies = new Array();
                            if (reply.length > options.twitter.limit) {
                                var __newReplySet = reply.splice(0, 2);
                                __replies = __newReplySet;
                            } else {
                                __replies = reply
                            };

                            Feed.twitter.utility.getPosts(__replies)
                        }
                    );
                },
                utility: {
                    getPosts: function (json) {
                        $.each(json, function () {
                            var element = this;
                            var post = new SocialFeedPost('twitter', Feed.twitter.utility.unifyPostData(element));
                            var _isPostContentAlwaysVisible = post.content.content_always_visible;
                            options.twitter.onParseDataComplete(post, "twitter");

                            //post.render(); //reserved for when ALL feeds (twitter AND instagram) are correctly rearranged per the 'pattern' ready to be rendered (social-feed.js)
                        });
                    },
                    unifyPostData: function (element) {
                        var post = {};
                        post.id = element.id;
                        post.dt_create = moment(Feed.twitter.utility.fixTwitterDate(element.created_at));
                        post.author_link = 'http://twitter.com/' + element.user.screen_name;
                        post.author_picture = element.user.profile_image_url;
                        post.post_url = post.author_link + '/status/' + element.id_str;
                        post.author_name = element.user.name;
                        post.message = element.text;
                        post.description = '';
                        post.social_network = 'twitter';
                        post.link = 'http://twitter.com/' + element.user.screen_name + '/status/' + element.id_str;
                        post.content_always_visible = false;

                        if (options.show_media === true) {
                            //							console.log("");
                            //							console.log("options.show_media === true");
                            //							console.log("");

                            if (element.entities.media && element.entities.media.length > 0) {
                                //if image exists:
                                image_url = element.entities.media[0].media_url;
                            } else {
                                //use default img:
                                image_url = options.default_image_url;
                                post.content_always_visible = true;
                                console.warn("No *image found when parsing Social Media Website data from: Twitter. Using backup");
                                //								console.warn("No *image found when parsing Social Media Website data from: Twitter. If you think this warning is not accurate, please contact the Web Administrator by using the contact form on the website.");
                                //								console.warn("*image: This is a keyword that can mean multiple things, including but not limited to missing/not found/error loading and/or corrupt file/folder/value of the following:");
                                //								console.warn("options' default image url");
                                //								console.warn("element's entities' media tag and/or it's length as an array / objects");
                            }
                        } else {
                            //use default img:
                            image_url = options.default_image_url;
                            post.content_always_visible = true;
                            //							console.warn("No *image found when parsing Social Media Website data from: Twitter. If you think this warning is not accurate, please contact the Web Administrator by using the contact form on the website.");
                            console.warn("No *image found when parsing Social Media Website data from: Twitter. Using backup");
                            //							console.warn("*image: This is a keyword that can mean multiple things, including but not limited to missing/not found/error loading and/or corrupt file/folder/value of the following:");
                            //							console.warn("options' show media variable may be '==' but is not '===-''");
                            //							console.warn("options' show media variable is not equal");
                            //							console.warn("options' show media variable is not defined/incorrectly defined.");
                        }

                        if (image_url) {
                            post.attachment = '<img class="attachment" src="' + image_url + '" />';
                        } else {
                            console.error("No conditional was met, which is extremely rare and - until you having received this message - thought impossible! **Please contact the Web Administrator by using the contact form on the website.");
                            console.error("###ERROR###::10-15-08-10::###/ERROR###");
                            console.error("**If the contact form on the website is unavailable due to presented error, please e-mail: Langdon@UnionAdWorks.com using the line above as the subject. Thank you for helping us improve your experience at AmericanBadassBeer.com");
                        }
                        return post;
                    },
                    fixTwitterDate: function (created_at) {
                        created_at = created_at.replace('+0000', 'Z');
                        if (created_at !== undefined)
                            return created_at;
                    }
                }
            },
            instagram: {
                posts: [],
                loaded: false,
                getData: function (account) {
                    console.log("options.instagram.user_access_token")
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)
                    console.log(options.instagram.user_access_token)

                    //1823114017.a71edc5.24fe7e4b48a0476c8f4992c10504f881					
                    ////Get the most recent media published by a user. 
                    //To get the most recent media published by the owner of the access token, you can use self instead of the user-id:
                    ////
                    //https://api.instagram.com/v1/users/{user-id}/media/recent/?access_token=ACCESS-TOKEN
                    //See the authenticated user's feed. 
                    //https://api.instagram.com/v1/users/self/feed?access_token=ACCESS-TOKEN
                    /*		self feed params:
                    ACCESS_TOKEN	A valid access token.
                    COUNT	Count of media to return.
                    MIN_ID	Return media later than this min_id.
                    MAX_ID	Return media earlier than this max_id.s
                    */
                    //account.substr(1),
                    var url,
                        user_name = 1823114017,
                        user_id = options.instagram.user_id,
                        min_id = (options.instagram.index_offset) ? '&min_id=' + options.instagram.index_offset : "",
                        limit = '&count=' + options.instagram.limit,
                        access_token = options.instagram.user_access_token,
                        query_str = 'users/' + user_id + '/media/recent/?access_token=' + access_token,
                        // query_str = 'users/self/feed?access_token=' + access_token,


                        //I think client_id is in wrong place ???
                        //query_str = 'users/' + options.instagram.client_id + 'media/recent/?access_token=' + access_token,
                        api_base_url = 'https://api.instagram.com/v1/';

                    url = api_base_url + query_str + min_id + limit

                    switch (account[0]) {
                        case '@':
                            Utility.request(url, Feed.instagram.utility.getUsers);
                            break;
                        case '#':
                            Utility.request(url, Feed.instagram.utility.getImages);
                            break;
                        default:
                    }
                },
                utility: {
                    getImages: function (json) {
                        if (json) {
                            console.log(json);
                            console.log(json.data);
                            var __index = options.instagram.index_offset;
                            var __max_index = __index + json.data.length;
                        }
                        json.data.forEach(function (element) {
                            var post = new SocialFeedPost('instagram', Feed.instagram.utility.unifyPostData(element));
                            //post.render(); //reserved for when ALL feeds (twitter AND instagram) are correctly rearranged per the 'pattern' ready to be rendered (social-feed.js)
                            var _isPostContentAlwaysVisible = post.content.content_always_visible;
                            options.instagram.onParseDataComplete(post, "instagram");
                        });

                    },
                    getUsers: function (json, username) {

                        json.data.forEach(function (user) {
                            if (user.username == username) {
                                var url = igm_api_base + 'users/' + user.id + '/media/recent/?' + query_extention;
                                Utility.request(url, Feed.instagram.utility.getImages);
                            }
                        });
                    },
                    unifyPostData: function (element) {
                        var post = {};
                        post.id = element.id;
                        post.dt_create = moment(element.created_time * 1000);
                        post.author_link = 'http://instagram.com/' + element.user.username;
                        post.author_picture = element.user.profile_picture;
                        post.author_name = element.user.full_name;
                        post.message = (element.caption && element.caption) ? element.caption.text : '';
                        post.description = '';
                        post.social_network = 'instagram';
                        post.link = element.link;
                        post.content_always_visible = false;
                        if (options.show_media) {
                            if (element.images.standard_resolution.url && element.images.standard_resolution.url != "") {
                                post.attachment = '<img class="attachment" src="' + element.images.standard_resolution.url + '' + '" />';
                            } else {
                                post.content_always_visible = true;
                                post.attachment = '<img class="attachment" src="' + options.default_image_url + '' + '" />';
                            }
                        } else {

                        }
                        return post;
                    }
                }
            } //</instagram>

        }

        // Initiate function
        Feed.init();
        if (options.update_period) {
            setInterval(function () {
                return Feed.init();
            }, options.update_period);
        }

    };

})(jQuery);
