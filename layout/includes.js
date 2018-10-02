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
    let historyKey = 0;
    let history = JSON.parse(document.querySelector('#history').getAttribute('value'));
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

    input.addEventListener('keydown', function (e) {
        let value = '';
        if (e.keyCode === 38) { // key: UP (arrow)
            value = history[historyKey];
            setNewHistoryKey(historyKey + 1);
        } else if (e.keyCode === 40) { // key: DOWN (arrow)
            if (setNewHistoryKey(historyKey - 1)) {
                value = history[historyKey];
            }
        }

        if (value !== undefined) {
            input.setAttribute('value', value);
        }
    });

    function setNewHistoryKey(newKey) {
        if (history[newKey] !== undefined) {
            historyKey = newKey;
            return true;
        }
        return false;
    }

 /** End of Input Field **/
