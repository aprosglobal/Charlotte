const title = document.querySelector(".comedor-name") as HTMLElement | null;
const input = document.querySelector(
  ".form-conses .comedor input"
) as HTMLInputElement | null;

if (title && input) {
  input.value = title.textContent?.trim() ?? "";
}
