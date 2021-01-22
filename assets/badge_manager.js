const catBadge = document.querySelector('#cat-badge');
const selectColorBadgeSuccess = document.querySelector('#color-badge-success');
selectColorBadgeSuccess.style.visibility = 'hidden';
const selectColorBadgeCollection = document.querySelector('#color-badge-collection');
selectColorBadgeCollection.style.visibility = 'hidden';
const radioColorBadgeAdmin = document.querySelector('#color-badge-admin');
radioColorBadgeAdmin.style.visibility = 'hidden';
const labelColorBadgeAdmin = document.querySelector('#color-badge-admin-label');
labelColorBadgeAdmin.style.visibility = 'hidden';

catBadge.addEventListener('change', function(){
    if(catBadge.value == 'success'){
        selectColorBadgeSuccess.style.visibility = 'visible';
        selectColorBadgeCollection.style.visibility = 'hidden';
        radioColorBadgeAdmin.style.visibility = 'hidden';
        labelColorBadgeAdmin.style.visibility = 'hidden';
    }
    else if(catBadge.value == 'collection'){
        selectColorBadgeSuccess.style.visibility = 'hidden';
        selectColorBadgeCollection.style.visibility = 'visible';
        radioColorBadgeAdmin.style.visibility = 'hidden';
        labelColorBadgeAdmin.style.visibility = 'hidden';
    }
    else if(catBadge.value == 'admin'){
        selectColorBadgeSuccess.style.visibility = 'hidden';
        selectColorBadgeCollection.style.visibility = 'hidden';
        radioColorBadgeAdmin.style.visibility = 'visible';
        labelColorBadgeAdmin.style.visibility = 'visible';
    }
    else{
        selectColorBadgeSuccess.style.visibility = 'hidden';
        selectColorBadgeCollection.style.visibility = 'hidden';
        radioColorBadgeAdmin.style.visibility = 'hidden';
        labelColorBadgeAdmin.style.visibility = 'hidden';
    }
})

const inputBadgeContent = document.querySelector('#badge-content');

inputBadgeContent.addEventListener('change', function(e){
    let valueBadgeContent = e.target.value;
    let sizePattern = /^\S{1,4}$/;
    if(valueBadgeContent.match(sizePattern)){     
        inputBadgeContent.style.border = '1px solid lawngreen';     
    }
    else{
        inputBadgeContent.style.border = '1px solid red';
    }
})