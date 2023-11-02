const openModal = document.querySelector('.selected_language')
const modal = document.querySelector('.modal_footer')

var isOpen = false;

// Функция для открытия или закрытия модального окна
function toggleModal() {
  if (isOpen) {
    modal.style.display = "none";
    isOpen = false;
  } else {
    modal.style.display = "block";
    isOpen = true;
  }
}

openModal.addEventListener('click', toggleModal)

