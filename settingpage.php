<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overlay Settings</title>
</head>
<body>
    <h1>Overlay Settings</h1>
    <form action="save_settings.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required /><br /><br />

        <label for="targeting_rule">Targeting Rule:</label>
        <select id="targeting_rule" name="targeting_rule">
            <option value="homepage">Show on homepage only</option>
        </select><br /><br />

        <label for="overlay_type">Overlay Type:</label>
        <select id="overlay_type" name="overlay_type">
            <option value="footer_slidein">Footer SlideIn</option>
            <option value="modal_overlay">Modal Overlay</option>
        </select><br /><br />

        <label for="display_rules">Display Rules:</label>
        <select id="display_rules" name="display_rules">
            <option value="once_per_day">Once per day</option>
            <option value="once_per_session">Once per session</option>
        </select><br /><br />

        <input type="submit" value="Save Settings" />
    </form>
</body>
</html>
