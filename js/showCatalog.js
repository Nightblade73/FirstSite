function show(state) {
    if (state) {
        $("#menu").hide(1000);
        setTimeout("$('#catalog').slideToggle(1000);", 1000);
        setTimeout("document.getElementById('wrap').style.display = 'block'", 2000);
    } else
    {
        $("#catalog").slideToggle(1000);
        setTimeout("$('#menu').show(1000);", 1000);
        document.getElementById('wrap').style.display = 'none';
    }
}