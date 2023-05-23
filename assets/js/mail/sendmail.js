// Send mail wrapper
const sendMailWrapper = document.querySelector("[data-sendmail");


/**
 * This function is sending mail
 * 
 * @returns {Void}
 */
function sendMail(sendMailTrigger) {

    // Exit if there is no send wrapper
    if(!sendMailWrapper || sendMailWrapper === null || sendMailWrapper === undefined) return;

    // Email address to where mail is sent
    let mailTo = sendMailWrapper.dataset.mailto;

    // Mail message
    let emailBody = sendMailWrapper.querySelector("textarea[name='message']").value;

    // Sender name
    let senderName = sendMailWrapper.querySelector("[name='user-name']").value;

    // Mail subject
    let subject = encodeURIComponent('RM Alcon Stahl Upit');

    // Encode email body(message)
    emailBody = encodeURIComponent(emailBody);

    // Encode sender name
    senderName = encodeURIComponent(senderName);

    // Generate mailto link
    var mailtoLink = 'mailto:' + mailTo + '?subject=' + subject + '&body=Name: ' + senderName + "%0D%0A" + emailBody;

    // Append mailto link to link
    sendMailTrigger.href = mailtoLink;
}



if(sendMailWrapper) {
    let mailToTrigger = sendMailWrapper.querySelector(".send-mail-trigger");

    mailToTrigger.addEventListener("click", function() {
        sendMail(this);
    });
}