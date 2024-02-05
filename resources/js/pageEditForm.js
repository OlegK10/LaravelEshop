document.querySelectorAll("[edit-form]")?.forEach(function (form) {
    form.classList.add("hidden");
});

document.querySelectorAll("[btn-show-edit-form]")?.forEach(function (btn) {
    btn.addEventListener("click", function () {
        var form = btn.parentNode.querySelector("[edit-form]");
        if (form) {
            form.classList.remove("hidden");
        } else {
            var form = btn.parentNode.parentNode.querySelector("[edit-form]");
            form.classList.remove("hidden");
        }
    });
});

document.querySelectorAll("[btn-close-edit-form]")?.forEach(function (btn) {
    btn.addEventListener("click", function () {
        btn.closest("[edit-form]")?.classList.add('hidden');
    });
})

document.querySelectorAll("input[type=file]")?.forEach(function (input) {
    input.addEventListener("change", function () {
        let file = input.files[0];
        if (file) {
            let reader = new FileReader();

            reader.onload = function (e) {
                input.closest("div").querySelector('img').setAttribute("src", e.target.result);
            }
            reader.readAsDataURL(file);
        }
    })
})


document.querySelectorAll("[btn-submit-form]").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
        let requirest = btn.closest("form")?.querySelectorAll("[form-require]");

        requirest.forEach(function (require) {
            if (require.value === "" || require.value === undefined) {
                e.preventDefault();
                require.closest("div").style.color = '#DC4040';
            }
        })
    })
})