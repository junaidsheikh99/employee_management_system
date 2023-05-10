const approveButtons = document.querySelectorAll('.approve');
const rejectButtons = document.querySelectorAll('.reject');

approveButtons.forEach(button => {
  button.addEventListener('click', () => {
    const row = button.parentNode.parentNode;
    row.querySelector('td:last-of-type').textContent = 'Approved';
    row.style.backgroundColor = '#c8f7c5';
  });
});

rejectButtons.forEach(button => {
  button.addEventListener('click', () => {
    const row = button.parentNode.parentNode;
    row.querySelector('td:last-of-type').textContent = 'Rejected';
    row.style.backgroundColor = '#ffc5c5';
  });
});
