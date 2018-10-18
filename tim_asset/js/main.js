function markClick(notificationCount) {
    if(notificationCount !=='0'){
        $.get('/Xe_Khach/markAsRead');
    }
}