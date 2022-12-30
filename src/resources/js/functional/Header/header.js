const body = document.body;

const toggleDetail = () => {
    document.addEventListener("click", (e) => {
        if(e.target.closest('#js_hamburger'))
        {
            body.classList.toggle("js_open_detail_menu");
        }
        else
        {
            body.classList.remove("js_open_detail_menu");
        }

        const has_class = body.classList.contains('js_open_detail_menu');

        const detail_menu = document.getElementById('detail_menu');

        if (has_class)
        {
            detail_menu.classList.add("detail-menu")
            detail_menu.classList.remove("hidden")
        }
        else
        {
            detail_menu.classList.add("hidden")
            detail_menu.classList.remove("detail-menu")
        }
    })
}

toggleDetail();