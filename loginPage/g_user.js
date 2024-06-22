// Get the cancel button
const cancelButton = document.getElementById('cancelButton');

// Add a click event listener to the cancel button
cancelButton.addEventListener('click', () => {
  // Get the current booking section
  const currentBookingSection = document.querySelector('.current-booking');

  // Clear the content of the current booking section
  currentBookingSection.innerHTML = '';

  // You can also add additional code here, such as displaying a success message or updating the UI
});
// Get the service history button and container
const serviceHistoryButton = document.getElementById('serviceHistoryButton');
const serviceHistoryContainer = document.querySelector('.service-history-container');

// Add a click event listener to the service history button
serviceHistoryButton.addEventListener('click', () => {
  // Display the service history
  displayServiceHistory();
});

// Function to display the service history
function displayServiceHistory() {
  // Fetch or retrieve the service history data
  // const serviceHistory = [
  //   {
  //     name: 'Oil Change',
  //     serviceType: 'Maintenance',
  //     serviceDate: '2023-05-01'
  //   },
  //   {
  //     name: 'Tire Rotation',
  //     serviceType: 'Maintenance',
  //     serviceDate: '2023-03-15'
  //   },
  //   {
  //     name: 'Brake Inspection',
  //     serviceType: 'Safety Check',
  //     serviceDate: '2023-01-10'
  //   }
  // ];

  // Assume serviceHistory is the array of service records fetched from the database

// Function to delete a service record from the database
function deleteServiceRecord(index) {
  // Assuming there's a method to delete from the database
  // For example, if serviceHistory is an array and index is the index of the record to delete
  serviceHistory.splice(index, 1); // This removes 1 element at the specified index
  // In a real scenario, you would likely make an API call or use another method to delete from the database
}

// Example usage of deleteServiceRecord(index):
// deleteServiceRecord(0); // This would delete the first service record from the database

// Clear the UI container (if needed, but not affecting database)
// serviceHistoryContainer.innerHTML = '';

// Render the first three elements from serviceHistory to the UI container
serviceHistory.slice(0, 3).forEach((service, index) => {
  const serviceElement = document.createElement('div');
  serviceElement.classList.add('service-item');

  const nameElement = document.createElement('p');
  nameElement.textContent = `Name: ${service.name}`;

  const serviceTypeElement = document.createElement('p');
  serviceTypeElement.textContent = `Service Type: ${service.serviceType}`;

  const serviceDateElement = document.createElement('p');
  serviceDateElement.textContent = `Service Date: ${service.serviceDate}`;

  serviceElement.appendChild(nameElement);
  serviceElement.appendChild(serviceTypeElement);
  serviceElement.appendChild(serviceDateElement);

  serviceHistoryContainer.appendChild(serviceElement);
});
