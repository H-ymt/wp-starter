const button = document.querySelector(".js-globalMenuButton")
const menu = document.querySelector(".js-globalMenu")

export function GlobalMenu() {
  const toggleMenu = () => {
    isMenuOpen = !isMenuOpen

    if (isMenuOpen) {
      button.classList.add("is-active")
      menu.classList.add("is-active")
      button.setAttribute("aria-expanded", "true")
      button.setAttribute("aria-label", "メニューを閉じる")
      menu.setAttribute("aria-hidden", "false")
      document.body.style.overflow = "hidden"
    } else {
      button.classList.remove("is-active")
      menu.classList.remove("is-active")
      button.setAttribute("aria-expanded", "false")
      button.setAttribute("aria-label", "メニューを開く")
      menu.setAttribute("aria-hidden", "true")
      document.body.style.overflow = "auto"
    }
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && isMenuOpen) {
      toggleMenu()
    }
  })

  button.addEventListener("click", toggleMenu())
}
