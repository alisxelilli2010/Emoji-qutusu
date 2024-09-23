<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoji Qutusu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .emoji-box {
            width: 300px;
            height: auto;
            border: 2px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .emoji-item {
            display: flex;
            justify-content: center;
            padding: 10px;
            font-size: 24px;
        }
        .emoji {
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Emoji Seçimi</h1>

<label for="emoji-input">Emoji seçin:</label>
<select name="emoji" id="emoji-input">
    <option value="😊">😊</option>
    <option value="😂">😂</option>
    <option value="❤️">❤️</option>
    <option value="👍">👍</option>
    <option value="🔥">🔥</option>
</select>
<button id="add-emoji">Əlavə et</button>

<div class="emoji-box">
    <h3>Seçilmiş Emoji:</h3>
    <div class="emoji-item" id="emoji-display">
        <!-- Seçilmiş emoji burada göstəriləcək -->
    </div>
</div>

<script>
    function addEmoji() {
        const emojiSelect = document.getElementById('emoji-input');
        const selectedEmoji = emojiSelect.value;

        const emojiDisplay = document.getElementById('emoji-display');
        emojiDisplay.innerHTML = ''; // Əvvəlki emojini sil

        const emojiSpan = document.createElement('span');
        emojiSpan.className = 'emoji';
        emojiSpan.textContent = selectedEmoji;

        emojiDisplay.appendChild(emojiSpan); // Yeni emojini əlavə et
    }

    document.getElementById('add-emoji').addEventListener('click', addEmoji);

    // Enter düyməsinə basıldığında emoji əlavə et
    document.getElementById('emoji-input').addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Formun göndərilməsini əngəllə
            addEmoji();
        }
    });
</script>

</body>
</html>
