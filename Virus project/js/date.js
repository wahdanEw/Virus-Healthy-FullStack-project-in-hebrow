const currentdate = new Date();
function showDate() {
    const datetime = "תאריך: " + currentdate.getDate() + "/"
        + (currentdate.getMonth() + 1) + "/"
        + currentdate.getFullYear() + " - שעה: "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes() + ":"
        + currentdate.getSeconds();
    document.getElementById("date").innerHTML = datetime;
}
showDate();
