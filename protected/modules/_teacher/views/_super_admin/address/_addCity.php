<div class="panel-body">
    <ul class="list-inline">
        <li>
            <a type="button" class="btn btn-primary" ng-href="#/address">
                Країни, міста
            </a>
        </li>
    </ul>
    <div class="row">
        <div class="formMargin">
            <div class="col-lg-8">
                <form role="form" name="addCityForm" ng-submit="addCity();">
                    <div class="form-group">
                        <label>Країна</label>
                        <input id="typeahead" type="text" class="typeahead form-control" name="country"
                               placeholder="виберіть країну"
                               size="90" required>
                        <input type="number" hidden="hidden" id="country" value="0"/>
                    </div>

                    <div class="form-group">
                        <label>Назва українською</label>
                        <input name="titleUa" class="form-control" required maxlength="50" size="50">
                    </div>

                    <div class="form-group">
                        <label>Назва російською</label>
                        <input name="titleRu" class="form-control" required maxlength="50" size="50">
                    </div>

                    <div class="form-group">
                        <label>Назва англійською</label>
                        <input name="titleEn" class="form-control" required maxlength="50" size="50">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Зберегти</button>
                        <a type="reset" class="btn btn-outline btn-default" ng-href="#/address">
                            Скасувати
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var countries = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: basePath + '/_teacher/_super_admin/address/countriesByQuery?query=%QUERY',
            wildcard: '%QUERY',
            filter: function (countries) {
                return $jq.map(countries.results, function (country) {
                    return {
                        id: country.id,
                        titleUa: country.titleUa,
                        titleRu: country.titleRu,
                        titleEn: country.titleEn
                    };
                });
            }
        }
    });

    countries.initialize();

    $jq('#typeahead').on('typeahead:selected', function (e, item) {
        $jq("#country").val(item.id);
    });

    $jq('#typeahead').typeahead(null, {
        name: 'countries',
        display: 'titleUa',
        limit: 10,
        source: countries,
        templates: {
            empty: [
                '<div class="empty-message">',
                'не знайдено такої країни',
                '</div>'
            ].join('\n'),
            suggestion: Handlebars.compile("<div class='typeahead_wrapper'> <div class='typeahead_labels'><div class='typeahead_primary'>{{titleUa}}&nbsp;</div><div class='typeahead_secondary'>{{titleRu}}, {{titleEn}}</div></div></div>")
        }
    });
</script>
