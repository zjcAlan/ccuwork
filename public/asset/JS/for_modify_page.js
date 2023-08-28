function updateFormAction() {
    var selectedValue = document.getElementById('modify_select').value;
    var form = document.querySelector('form');
    
    form.action = 'modify/'+ selectedValue;
    return true;
}   