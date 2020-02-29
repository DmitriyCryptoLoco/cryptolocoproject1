function create() {
    jQuery.ajax({
        url:,
        type: "POST",
        data: {name: "amit", id: 1},
        dataType: "json",
        beforeSend: function (x) {
            if (x && x.overrideMimeType) {
                x.overrideMimeType("application/j-son;charset=UTF-8");
            }
        },
        success: function (result) {
            console.log(result);
        }
    });
}

function

delete ()
{
    jQuery.ajax({
        url:,
        type: "POST",
        data: {name: "amit", id: 1},
        dataType: "json",
        beforeSend: function (x) {
            if (x && x.overrideMimeType) {
                x.overrideMimeType("application/j-son;charset=UTF-8");
            }
        },
        success: function (result) {
            console.log(result);
        }
    });
}

function edit() {
    jQuery.ajax({
        url:,
        type: "POST",
        data: {name: "amit", id: 1},
        dataType: "json",
        beforeSend: function (x) {
            if (x && x.overrideMimeType) {
                x.overrideMimeType("application/j-son;charset=UTF-8");
            }
        },
        success: function (result) {
            console.log(result);
        }
    });
}

// On Click edit(); //
// On Click create(); //
// On Click delete(); //

function returnnull() {
    return null;
}

returnnull();
