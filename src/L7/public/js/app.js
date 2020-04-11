$(document).ready(function()
{
    $("#ide-text-hidden").on('keyup', function(e)
    {
        // check if char != space (' ')
        if(e.key != ' ')
        {
            // get all words
            var words = ideText();

            // replace simple text with html text
            $("#ide-text").html(words.words);

            // fill helper
            fillHelper(words.count);

            // show helper
            $("#word-helper").css("top", document.getElementById(words.count).offsetTop + 25);
            $("#word-helper").css("left", document.getElementById(words.count).offsetLeft);
            $("#word-helper").addClass("visible");
        }
        else
        {
            // hide helper
            $("#word-helper").removeClass("visible");
        }
    });
})

// get ide text
function ideText()
{
    // get all words
    var words_string = $("#ide-text-hidden").text();

    // if ide does not contain ' ' return this word
    if(words_string.indexOf(' ') == -1)
    {
        return textToSpan([words_string])
    }

    // get splited words
    var words = words_string.split(' ');

    // get html words
    words = textToSpan(words);

    return words;
}

// transform words to html span with same text
function textToSpan(words)
{
    // set result
    var result = 
    {
        'words': '',
        'count': 0
    }

    var text = '';

    // loop words
    $(words).each(function(key, value)
    {
        text += "<span id='" + key + "'>" + value + "</span> ";
        result.count = key;
    })

    result.words = text;

    return result;
}

// fill helper with words
function fillHelper(word)
{
    // empty helper words
    $("#word-helper").html('');

    // get word's first letter
    var letter = $("#"+word).text().charAt(0);

    // loop all helper words
    $(helper_words).each(function(key, value)
    {
        if(value.charAt(0) == letter)
        {
            $("#word-helper").append(
                "<div class='word'>" + value + "</div>"
            );
        }     
    })
}