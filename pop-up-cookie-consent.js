const storageType = localStorage;
const consentPropertyName = 'consent';
// Set up the functions to prevent the popup from appearing when already accepted the first time //
const shouldshowPopUp = () => !storageType.getItem(consentPropertyName);
const savetoStorage = () => storageType.setItem(consentPropertyName, true);
// Setting up interaction when loading the page with PopUp //
window.onload = () => {
    if (shouldshowPopUp()) {
        const consent = confirm('My website uses necessary for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies.')
        if (consent) {
            savetoStorage();
        }
    }
}