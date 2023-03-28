const changeColorLetterToBlack = () => {
    const blackLetters = document.querySelectorAll('.black-letters');
    blackLetters.forEach((blackLetter) => {
        blackLetter.style.color = "#000";
    })
}
// Get query parameters
let params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
});
let {
    company
} = params;
if (company) {
    company = company.toLowerCase();
    switch (company) {
        case "vida-caixa":
            useBlue();
            break;
        case "mapfre":
            useOrange();
            break;
        case "mutua-madrileña":
            useBlue();
            break;
        case "catalana-occidente":
            usePurple();
            break;
        case "red":
            useRed();
            break;
        case "blue":
            useBlue();
            break;
        case "orange":
            useOrange();
            break;
        case "yellow":
            useYellow();
            break;
        case "purple":
            usePurple();
            break;
        case "gray":
            useGray();
            break;
        case "green":
            useGreen();
            break;
        default:
            break;
    }
}

function useBlue() {
    $("body").get(0).style.setProperty("--primary-color", "#3c61ff");
    $("body").get(0).style.setProperty("--secondary-color", "#3c61ff");
    $("body").get(0).style.setProperty("--primary-gradient", "linear-gradient(-20deg,var(--default-color-invert),var(--primary-color) 99%)");
    $("body").get(0).style.setProperty("--primary-filter", "invert(21%) sepia(98%) saturate(2379%) hue-rotate(257deg) brightness(112%) contrast(101%)");
    $("body").get(0).style.setProperty("--secondary-filter", "invert(7%) sepia(28%) saturate(1007%) hue-rotate(197deg) brightness(97%) contrast(99%)");
}

function useRed() {
    $("body").get(0).style.setProperty("--primary-color", "#ff3c3c");
    $("body").get(0).style.setProperty("--primary-gradient", "linear-gradient(-20deg,var(--default-color-invert),var(--primary-color) 99%)");
    $("body").get(0).style.setProperty("--secondary-color", "#ff3c3c");
    $("body").get(0).style.setProperty("--primary-filter", "invert(35%) sepia(53%) saturate(3272%) hue-rotate(337deg) brightness(101%) contrast(109%)");
    $("body").get(0).style.setProperty("--secondary-filter", "invert(7%) sepia(28%) saturate(1007%) hue-rotate(197deg) brightness(97%) contrast(99%)");
}

function useGreen() {
    $("body").get(0).style.setProperty("--primary-color", "#008000");
    $("body").get(0).style.setProperty("--primary-gradient", "linear-gradient(-20deg,var(--default-color-invert),var(--primary-color) 99%)");
    $("body").get(0).style.setProperty("--secondary-color", "#008000");
    $("body").get(0).style.setProperty("--primary-filter", "invert(35%) sepia(53%) saturate(3272%) hue-rotate(337deg) brightness(101%) contrast(109%)");
    $("body").get(0).style.setProperty("--secondary-filter", "invert(7%) sepia(28%) saturate(1007%) hue-rotate(197deg) brightness(97%) contrast(99%)");
}

function usePurple() {
    $("body").get(0).style.setProperty("--primary-color", "#800080");
    $("body").get(0).style.setProperty("--secondary-color", "#800080");
}
function useYellow() {
    $("body").get(0).style.setProperty("--primary-color", "#ffe300");
    $("body").get(0).style.setProperty("--secondary-color", "#D1D100");

}
function useOrange() {
    $("body").get(0).style.setProperty("--primary-color", "#ff8000");
}
function usePurple() {
    $("body").get(0).style.setProperty("--primary-color", "#800080");
}

function useGray() {
    $("body").get(0).style.setProperty("--primary-color", "#808080");
}
function useYellow() {
    $("body").get(0).style.setProperty("--primary-color", "#FFFF00");
    changeColorLetterToBlack();
}
function useGreen() {
    $("body").get(0).style.setProperty("--primary-color", "#008000");
}
const actualDomain = window.location.hostname;
const hostname = window.location.hostname.split(".")[0];
console.log("hostname ", hostname);

const domains = document.querySelectorAll('.domain');
domains.forEach((domain) => {
    domain.textContent = `${hostname}`;
})
const actualLinks = document.querySelectorAll('.actual-link');
actualLinks.forEach((actualLink) => {
    actualLink.textContent = `https://${actualDomain} `;
})

const actualYears = document.querySelectorAll('.actual-year');
actualYears.forEach((actualYear) => {
    actualYear.textContent = new Date().getFullYear();
})