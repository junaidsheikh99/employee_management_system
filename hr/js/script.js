const form = document.querySelector('form');
const employeeList = document.querySelector('#employee-list');

let employees = [
	{
		id: 1,
		name: 'John Doe',
		department: 'Marketing',
		position: 'Manager'
	},
	{
		id: 2,
		name: 'Jane Smith',
		department: 'Human Resources',
		position: 'HR Manager'
	}
];

// Display Employee List
function displayEmployeeList() {
	employeeList.innerHTML = '';
	for (let employee of employees) {
		const tr = document.createElement('tr');
		tr.innerHTML = `
			<td>${employee.name}</td>
			<td>${employee.department}</td>
			<td>${employee.position}</td>
			<td>
				<button class="btn btn-primary edit-btn" data-id="${employee.id}">Edit</button>
				<button class="btn btn-danger delete-btn" data-id="${employee.id}">Delete</button>
			</td>
		`;
		employeeList.appendChild(tr);
	}
}

displayEmployeeList();

// Add Employee
form.addEventListener('submit', (e) => {
	e.preventDefault();
	const name = form.name.value;
	const department = form.department.value;
	const position = form.position.value;

	if (name && department && position) {
		const id = employees.length + 1;
		const employee = {
			id,
			name,
			department,
			position
		};
		employees.push(employee);
		form.reset();
		displayEmployeeList();
	} else {
		alert('Please fill all the fields');
	}
});

// Delete Employee
employeeList.addEventListener('click', (e) => {
	if (e.target.classList.contains('delete-btn')) {
		const id = parseInt(e.target.dataset.id);
		employees = employees.filter((employee) => employee.id !== id);
		displayEmployeeList();
	} else if (e.target.classList.contains('edit-btn')) {
		const id = parseInt(e.target.dataset.id);
		const employee = employees.find((employee) => employee.id === id);
		form.name.value = employee.name;
		form.department.value = employee.department;
		form.position.value = employee.position;
		form.dataset.id = id;
	}
});

// Update Employee
form.addEventListener('submit', (e) => {
	e.preventDefault();
	const name = form.name.value;
	const department = form.department.value;
	const position = form.position.value;
	const id = parseInt(form.dataset.id);

	if (name && department && position && id) {
		employees = employees.map((employee) => {
			if (employee.id === id) {
				employee.name = name;
				employee.department = department;
				employee.position = position;
			}
			return employee;
		});
		form.reset();
		form.removeAttribute('data-id');
		displayEmployeeList();
	} else {
		alert('Please fill all the fields');
	}
});
