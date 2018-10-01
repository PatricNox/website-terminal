/**
 * Following Javascript is for functionalities and
 * any eventual animation for the console.
 *
 * @author PatricNox <eronoxsmail@gmail.com>
 */

 /** Input Field  **/

    // Expand input width as user types
    const input = document.querySelector('#cmd');
    let $i = 2;
    document.addEventListener('input', function (e) {
        $i++;
        event.target.style.width = $i + '%';
    }, false);

    // Reset input fields width on Enter
    // This a workaround for the eventual massive 
    // and endless potentional width it can have after
    // a longer usage of the field.
    document.addEventListener('keyDown', function (e) {
        input.style.width = "auto";
        $i = 2;
    }, false);

    // Focus input field on document click.
    // Don't focus when selection is not empty.
    document.addEventListener('click', function (e) {
        if (window.getSelection().toString() === '') {
            input.focus();
        }
    }, false);

 /** End of Input Field **/
