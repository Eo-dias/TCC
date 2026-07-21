document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("projectModal");
    var modalImage = document.getElementById("projectModalImage");
    var modalTitle = document.getElementById("projectModalTitle");
    var modalDescription = document.getElementById("projectModalDescription");
    var closeButton = document.getElementById("projectModalClose");
    var triggers = document.querySelectorAll(".project-trigger");

    if (!modal || !modalImage || !modalTitle || !modalDescription || !closeButton) {
        return;
    }

    var openModal = function (image, title, description) {
        modalImage.src = image;
        modalImage.alt = title;
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modal.classList.add("is-open");
        modal.setAttribute("aria-hidden", "false");
        document.body.classList.add("modal-open");
    };

    var closeModal = function () {
        modal.classList.remove("is-open");
        modal.setAttribute("aria-hidden", "true");
        document.body.classList.remove("modal-open");
    };

    triggers.forEach(function (trigger) {
        trigger.addEventListener("click", function () {
            openModal(trigger.dataset.image || "", trigger.dataset.title || "", trigger.dataset.description || "");
        });
    });

    closeButton.addEventListener("click", closeModal);

    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && modal.classList.contains("is-open")) {
            closeModal();
        }
    });
});