<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/header.php"?>
<div class="main">
    <div class="container">
        <div class="">
            <h2>Test REST service</h2>
            <form>
                <div class="form-group">
                    <label for="select">Choose a method for the request</label>
                    <select id="method" name="method">
                        <option value="get_all">Get All</option>
                        <option value="get">Get One</option>
                        <option value="update">Update One</option>
                        <option value="delete">Delete One</option>
                        <option value="create">Create One</option>
                    </select>
                </div>
                <div class="form-group">
                    <div id="additionalParam1" class="hidden">
                        <label>Paste an ID</label>
                        <input type="text" name="id" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div id="additionalParam2" class="hidden">
                        <label>Paste a phrase </label>
                        <input type="text" name="phrase" value="Test phrase">
                    </div>
                </div>
                <button id="sendRequest">Send request</button>
            </form>
            <form>
                <textarea rows="10" id="response"></textarea>
            </form>
            <h3>Console</h3>
            <div class="console" id="console"></div>
        </div>
    </div>
</div>
<div>
    <iframe src="http://service.ctc.ru/special/aeroflot/index.html?nowrap=true"></iframe>
</div>
<script src="/assets/js/src/rest.js"></script>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/footer.php"?>
