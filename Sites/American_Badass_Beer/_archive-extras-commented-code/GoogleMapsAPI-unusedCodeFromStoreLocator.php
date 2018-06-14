


/*	
			function createOption(name, distance, num)
			{
				var option = document.createElement("option");
				option.value = num;
				option.innerHTML = name + "(" + distance.toFixed(1) + ")";
				locationSelect.appendChild(option);
			}


			function createMarker(latlng, name, address, distance)
			{
				var html = "<b>" + name + "</b> <br/>" + address + "<br /> Distance: " + Math.round(distance);
				var marker = new google.maps.Marker(
				{
					map: map,
					position: latlng
				});

				google.maps.event.addListener(marker, 'click', function()
				{
					infoWindow.setContent(html);
					infoWindow.open(map, marker);
				});
				markers.push(marker);
			}
*/
/*
			function clearLocations() 
			{
				infoWindow.close();
				for (var i = 0; i < markers.length; i++)
				{
					markers[i].setMap(null);
				}
				markers.length = 0;

				locationSelect.innerHTML = "";
				var option = document.createElement("option");
				option.value = "none";
				option.innerHTML = "See all results:";
				locationSelect.appendChild(option);
				locationSelect.style.visibility = "visible";
			}
*/
