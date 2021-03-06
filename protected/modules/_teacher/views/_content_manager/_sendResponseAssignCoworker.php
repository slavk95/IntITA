<?php
/**
 *
 */
?>
<div class="panel panel-default col-md-7">
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label>
                    <strong>Користувач:</strong>
                </label>
                <input type="number" hidden="hidden" id="userId" value="0"/>
                <input id="typeaheadTeacher" type="text" class="form-control" placeholder="виберіть користувача"
                       size="135" required autofocus>
            </div>
            <br>
            <div class="form-group">
                <button type="button" class="btn btn-success" ng-click="sendCoworkerRequest()">Надіслати запит</button>
            </div>
        </form>
    </div>
</div>

<script>
    var teachers = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: basePath + '/_teacher/_content_manager/contentManager/usersWithoutCoworkersByQuery?query=%QUERY',
            wildcard: '%QUERY',
            filter: function (users) {
                return $jq.map(users.results, function (user) {
                    return {
                        id: user.id,
                        name: user.name,
                        email: user.email,
                        url: user.url
                    };
                });
            }
        }
    });

    teachers.initialize();

    $jq('#typeaheadTeacher').typeahead(null, {
        name: 'teachers',
        display: 'email',
        limit: 10,
        source: teachers,
        templates: {
            empty: [
                '<div class="empty-message">',
                'немає викладачів з таким іменем або email\`ом',
                '</div>'
            ].join('\n'),
            suggestion: Handlebars.compile("<div class='typeahead_wrapper'><img class='typeahead_photo' src='{{url}}'/> <div class='typeahead_labels'><div class='typeahead_primary'>{{name}}&nbsp;</div><div class='typeahead_secondary'>{{email}}</div></div></div>")
        }
    });

    $jq('#typeaheadTeacher').on('typeahead:selected', function (e, item) {
        $jq("#userId").val(item.id);
    });
</script>