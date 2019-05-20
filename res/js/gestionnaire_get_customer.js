

var noApplicationRecord = document.getElementById('container_customer_information')
function setdiv(item) {
    var div = '<div class = "customer_information">name :&nbsp; '
        + item.name
        +'<br>first_name:&nbsp;'
        + item.first_name
    '</div>'
    return div;
}

function getnoApplicationData()
{
    var html = ''
    for(var i = 0;i<data.length;i++){
        html += setdiv(data[i])
    }
    noApplicationRecord.innerHTML = html
}
window.onload = getnoApplicationData()