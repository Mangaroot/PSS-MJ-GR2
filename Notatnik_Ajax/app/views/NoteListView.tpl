{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <script>
        function sendAjaxRequest(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // handle success response
                        console.log(xhr.responseText);
                        document.body.innerHTML = xhr.responseText;
                    } else {
                        // handle error response
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
xhr.open('POST', '{$conf->action_url}NoteShowLike', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            var data = 'searchbar=' + document.getElementById('searchbar').value + '&page=' + page; // add your data here
            xhr.send(data);
        }
    </script>
    <div>
        <h1>Notes</h1>
        <form action="{$conf->action_url}NoteShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input id="searchbar" name="searchbar" placeholder="Search bar" />
            <input type="submit" value="Szukaj" />
        </form>
        <div id="result">
            {include file="noteList.tpl"}
        </div>
    </div>
    {include file='messages.tpl'}
{/block}