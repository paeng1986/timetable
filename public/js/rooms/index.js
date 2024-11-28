/**
 * An object for managing tasks related to rooms
 */
function Room(url, resourceName) {
    Resource.call(this, url, resourceName);
}

App.extend(Resource, Room);

Room.prototype.prepareForUpdate =  function(resource) {
    $('input[name=name]').val(resource.name);
    $('input[name=capacity]').val(resource.capacity);
    $('#specialization').val(resource.specialization).change();
    $('#room_type').val(resource.type);
};

window.addEventListener('load', function(){
    var room = new Room('/rooms', 'Lecture Room');
    room.init();
});