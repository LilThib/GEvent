$(function () {
    $('#private').change(function () {
        if ($('#private').is(':checked')) {
            $("#guestlist").removeAttr('hidden');
        }
    });
});

$(function () {
    $('#public').change(function () {
        if ($('#public').is(':checked')) {
            $("#guestlist").attr("hidden", "hidden");
        }
    });
});


function initializeAutocomplete(id) {
    var element = document.getElementById(id);

    if (element) {
        var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(46.2111, 6.1028));
        var options = {
            bounds: defaultBounds,
            types: ['geocode']
        };
        var autocomplete = new google.maps.places.Autocomplete(element, options);
        google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
    }
}

function onPlaceChanged() {
    var place = this.getPlace();

    // console.log(place);  // Uncomment this line to view the full object returned by Google API.

    for (var i in place.address_components) {
        var component = place.address_components[i];
        for (var j in component.types) {  // Some types are ["country", "political"]
            var type_element = document.getElementById(component.types[j]);
            if (type_element) {
                type_element.value = component.long_name;
            }
        }
    }
}

google.maps.event.addDomListener(window, 'load', function () {
    initializeAutocomplete('user_input_autocomplete_address');
});

