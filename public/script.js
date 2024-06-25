const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});



// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})



const searchButton = document.querySelector('form-input button');
const searchButtonIcon = document.querySelector('form-input button .bx');
const searchForm = document.querySelector('table');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

// search booking//
function searchTable() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toLowerCase();
    table = document.getElementById('dataTable');
    tr = table.getElementsByTagName('tr');

    for (i = 1; i < tr.length; i++) { // Skip the header row
        tr[i].style.display = 'none'; // Hide the row initially
        td = tr[i].getElementsByTagName('td');
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = ''; // Show the row if a match is found
                    break; // No need to check other cells in the row
                }
            }
        }
    }
}

// modal
var modal = document.getElementById("addCottagesModal");
var addCottagesBtn = document.getElementById("addCottagesBtn");
var closeBtn = document.getElementsByClassName("close")[0];
addCottagesBtn.onclick = function() {
    modal.style.display = "block";
}

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

document.getElementById("addCottagesForm").addEventListener("submit", function(event) {
    event.preventDefault(); 
    var cottagesName = document.getElementById("cottagesName").value;
    alert("Cottage Name submitted: " + cottagesName);
    modal.style.display = "none"; 
});



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Home").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Home.php", true);
  xhttp.send();
}




// SLIDER
const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {

	constructor(container, items, controls){
		this.carouselContainer = container;
		this.carouselControls = controls;
		this.carouselArray = [...items];
	}

	updateGallery(){
		this.carouselArray.forEach(el => {
			el.classList.remove('gallery-item-1');
			el.classList.remove('gallery-item-2');
			el.classList.remove('gallery-item-3');
			el.classList.remove('gallery-item-4');
			el.classList.remove('gallery-item-5');
		});

		this.carouselArray.slice(0, 5).forEach(el, i => {
			el.classList.add(`gallery-item-${i+1}`);
		});
	}

	setCurrentState(direction){
		if (direction.className == 'gallery-controls-previous'){
			this.carouselArray.unshift(this.carouselArray.pop());
		}else{
			this.carouselArray.push(this.carouselArray.shift());
		}
		this.updateGallery();
	}
	setControls(){
		this.carouselControls.forEach(control => {
			galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
			document.querySelector(`.gallery-controls-${control}`).innerText = control;
		});
	}

	userControls(){
		const triggers = [...galleryControlsContainer.childNodes];
		triggers.forEach(control => {
			control.addEventListener('click', e=>{
				e.preventDefault();
				this.setCurrentState(control);
			});
		});
	}
}	

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.userControls();


// CRUD (not okay)

function editItem() {
	// Implement edit logic here, e.g., redirect to edit page or open a modal
	console.log("Edit button clicked");
	// Example: redirect to edit.php with query string for item ID
	window.location.href = '/edit.php?id=1'; // Replace with your logic
}

function deleteItem() {
	// Implement delete logic here, e.g., show confirmation dialog and then delete item
	if (confirm("Are you sure you want to delete?")) {
		console.log("Delete button clicked");
		// Example: make AJAX request to delete item
		deleteFromDatabase(1); // Replace with your logic
	}
}

function deleteFromDatabase(id) {
	// Example: AJAX request to delete item from database
	fetch('bookings', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: JSON.stringify({ id: id }),
	})
	.then(response => response.json())
	.then(data => {
		alert(data.message); // Show success message
		// Optionally, update the UI or redirect
	})
	.catch(error => {
		console.error('Error:', error);
		alert("Failed to delete item.");
	});
}


// EDIT MODAL
function openEditModal(id, cottageNo, capacity, description) {
	document.getElementById("editItemId").value = id;
	document.getElementById("editCottageNo").value = cottageNo;
	document.getElementById("editCapacity").value = capacity;
	document.getElementById("editDescription").value = description;

	// Show the modal
	var modal = document.getElementById("editModal");
	modal.style.display = "block";
}

// Function to close modal
function closeModal() {
	var modal = document.getElementById("editModal");
	modal.style.display = "none";
}

// Function to handle form submission
document.getElementById("editForm").addEventListener("submit", function(event) {
	event.preventDefault(); // Prevent default form submission

	var formData = new FormData(this); // Create FormData object

	// AJAX request to update data
	fetch('bookings', {
		method: 'POST',
		body: formData
	})
	.then(response => response.json())
	.then(data => {
		alert(data.message); // Show success message or handle response
		closeModal(); // Close modal after successful update
		// Optionally, update UI or reload data
	})
	.catch(error => {
		console.error('Error:', error);
		alert("Failed to update cottage.");
	});
});