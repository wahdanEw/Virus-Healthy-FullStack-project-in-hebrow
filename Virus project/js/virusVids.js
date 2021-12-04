let as2 = document.getElementById("virus_select");
function show() {
    let as = as2.value;
    if (as === ""){
        document.getElementById("selected_video").innerHTML = "";
    }
    if (as === "COVID19") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/5DGwOJXSxqg" title="COVID19 Virus"</iframe>';
    }
    if (as === "Lassa") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/V6oqVRVKDIM" title="Lassa Virus"</iframe>';
    }
    if (as === "Influenza") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/3cPLUlAF96U" title="Influenza Virus"</iframe>';
    }
    if (as === "Mumps") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/Qw85HqynWbs" title="Mumps Virus"</iframe>';
    }
    if (as === "Rabies") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/KAWHTHzpnA4" title="Rabies Virus"</iframe>';
    }
    if (as === "Ebolavirus") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/jdk2Zhp6FRA" title="Ebolavirus Virus"</iframe>';
    }
    if (as === "Measles") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/0E1sBDJ5-Ho" title="Measles Virus"</iframe>';
    }
    if (as === "SwineFlu") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/NPr-i-IbA7s" title="SwineFlu Virus"</iframe>';
    }
    if (as === "HIV") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/8tWDM5uj_eQ" title="HIV Virus"</iframe>';
    }
    if (as === "cancer") {
        document.getElementById("selected_video").innerHTML = '<iframe class="selected_vid_style" src="https://www.youtube.com/embed/S386cRtQjao" title="cancer Virus"</iframe>';
    }
}
as2.onchange = show;
show();
