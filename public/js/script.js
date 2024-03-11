// document.addEventListener('DOMContentLoaded', function() {
function handleCheckboxChange(day, suffix) {
    const isChecked = document.getElementById('day'+day).checked;
    document.getElementById('d_' + day + suffix +'_start').disabled = !isChecked;
    document.getElementById('d_' + day + suffix +'_end').disabled = !isChecked;
}

const alertBox = document.querySelector('.alert.flash');

if (alertBox != undefined){ 
setTimeout(function() {
    alertBox.style.display = 'none';
}, 3000)
}

// onclick="handleCheckboxChange({{ $day }})

// // Attach change event listeners to checkboxes for each day
//     const dayCheckboxes = document.querySelectorAll('.dayCheckbox'); // Update with your days
//     dayCheckboxes.forEach(function(day) {
//         document.getElementById('day'+day).addEventListener('click', function() {
//             handleCheckboxChange(day);
//         });
//     });
// });