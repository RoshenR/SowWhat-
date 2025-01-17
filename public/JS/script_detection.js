const tableBody = document.querySelector('#balise-table tbody');
const addRowButton = document.getElementById('addRowBtn');
const formPopup = document.getElementById('form-popup');
const passwordPopup = document.getElementById('password-popup');
const cancelBtn = document.getElementById('cancelBtn');
const cancelPasswordBtn = document.getElementById('cancelPasswordBtn');
const addForm = document.getElementById('add-form');
const passwordForm = document.getElementById('password-form');
const overlay = document.getElementById('overlay');
let currentRow = null; // To track the row being edited or deleted

// Ouvrir le formulaire d'ajout/modification
addRowButton.addEventListener('click', () => {
    currentRow = null;
    addForm.reset();
    formPopup.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('dimmed');
});

// Fermer le formulaire d'ajout/modification
cancelBtn.addEventListener('click', () => {
    formPopup.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('dimmed');
});

// Ajouter ou modifier une ligne dans le tableau
// addForm.addEventListener('submit', (event) => {
//     const description = document.getElementById('description').value.trim();
//     const localisation = document.getElementById('localisation').value;
//     const numeroSalle = document.getElementById('numero-salle').value.trim();
//     const categorie = document.getElementById('categorie').value;
//     const datePublication = document.getElementById('date-publication').value;

//     // Si nous sommes en train de modifier une ligne existante
//     if (currentRow) {
//         currentRow.children[0].textContent = description;
//         currentRow.children[1].textContent = localisation;
//         currentRow.children[2].textContent = numeroSalle;
//         currentRow.children[3].textContent = categorie;
//         currentRow.children[4].textContent = datePublication;
//     } else {
//         // Ajouter une nouvelle ligne visuellement
//         const newRow = document.createElement('tr');
//         newRow.innerHTML = `
//             <td>${description}</td>
//             <td>${localisation}</td>
//             <td>${numeroSalle}</td>
//             <td>${categorie}</td>
//             <td>${datePublication}</td>
//             <td>
//                 <button class="btn edit-btn">Modifier</button>
//                 <button class="btn btn-danger delete-btn">Supprimer</button>
//             </td>
//         `;
//         tableBody.appendChild(newRow);
//     }

//     // Fermer le formulaire après l'ajout ou modification
//     formPopup.classList.remove('active');
//     overlay.classList.remove('active');
//     document.body.classList.remove('dimmed');
// });

// Ouvrir le formulaire pour modifier une ligne
tableBody.addEventListener('click', (event) => {
    if (event.target.classList.contains('edit-btn')) {
        currentRow = event.target.closest('tr');
        const cells = currentRow.children;

        // Pré-remplir les champs du formulaire avec les données de la ligne
        document.getElementById('description').value = cells[0].textContent.trim();
        document.getElementById('localisation').value = cells[1].textContent.trim();
        document.getElementById('numero-salle').value = cells[2].textContent.trim();
        document.getElementById('categorie').value = cells[3].textContent.trim();
        document.getElementById('date-publication').value = cells[4].textContent.trim();

        formPopup.classList.add('active');
        overlay.classList.add('active');
        document.body.classList.add('dimmed');
    }
});

// Ouvrir la fenêtre popup pour demander le mot de passe avant la suppression
tableBody.addEventListener('click', (event) => {
    if (event.target.classList.contains('delete-btn')) {
        currentRow = event.target.closest('tr');
        passwordPopup.classList.add('active');
        overlay.classList.add('active');
        document.body.classList.add('dimmed');
    }
});

// Annuler la suppression
cancelPasswordBtn.addEventListener('click', () => {
    passwordPopup.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('dimmed');
});

// Confirmer la suppression avec le mot de passe
passwordForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const password = document.getElementById('password').value;
    if (password === 'sowwhat') {
        tableBody.removeChild(currentRow);
        passwordPopup.classList.remove('active');
        overlay.classList.remove('active');
        document.body.classList.remove('dimmed');
    } else {
        alert('Mot de passe incorrect.');
    }
});
