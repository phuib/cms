<?php

return [
    'cms_object' => [
        'invalid_file' => 'Tiedoston nimi: :name ei ole kelvollinen. Tiedoston nimet voivat sisältää ainoastaan aakkosnumeerisia merkkejä, alaviivoja, viivoja ja pisteitä. Esimerkkejä kelvollisista tiedostonimistä: sivu.htm, sivu, alahakemisto/sivu',
        'invalid_property' => "Ominaisuutta ':name' ei voida asettaa",
        'file_already_exists' => "Tiedosto ':name' on jo olemassa.",
        'error_saving' => "Virhe tallentaessa tiedostoa ':name'. Tarkista kirjoitusoikeudet.",
        'error_creating_directory' => 'Virhe luotaessa hakemistoa :name. Tarkista kirjoitusoikeudet.',
        'invalid_file_extension' => 'Virheellinen tiedostopääte: :invalid. Sallitut päätteet ovat: :allowed.',
        'error_deleting' => "Virhe poistaessa teemaa ':name'. Tarkista kirjoitusoikeudet.",
        'delete_success' => 'Malleja poistettu: :count.',
        'file_name_required' => 'Tiedoston nimi -kenttä on vaadittu.',
        'safe_mode_enabled' => 'Turvatila on käytössä.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Verkkosivu',
            'online' => 'Verkossa',
            'maintenance' => 'Huollossa',
            'manage_themes' => 'Hallitse teemoja',
            'customize_theme' => 'Muokkaa teemaa'
        ]
    ],
    'theme' => [
        'not_found_name' => "Teemaa ':name' ei löydy.",
        'by_author' => 'Tekijältä :name',
        'active' => [
            'not_set' => 'Aktiivista teemaa ei ole asetettu.',
            'not_found' => 'Aktiivista teemaa ei löydy.'
        ],
        'edit' => [
            'not_set' => 'Muokattavaa teemaa ei ole asetettu.',
            'not_found' => 'Muokattavaa teemaa ei löydy.',
            'not_match' => 'Objektia, jota yrität muokata, ei kuulu muokattavaan teemaan. Päivitä sivu uudelleen.'
        ],
        'settings_menu' => 'Teema',
        'settings_menu_description' => 'Esikatsele luettelo asennetuista teemoista ja valitse aktiivinen teema.',
        'default_tab' => 'Ominaisuudet',
        'name_label' => 'Nimi',
        'name_create_placeholder' => 'Uuden teeman nimi',
        'author_label' => 'Tekijä',
        'author_placeholder' => 'Henkilön tai yrityksen nimi',
        'description_label' => 'Kuvaus',
        'description_placeholder' => 'Teeman kuvaus',
        'homepage_label' => 'Kotisivu',
        'homepage_placeholder' => 'Verkkosivun URL',
        'code_label' => 'Koodin',
        'code_placeholder' => 'Uniikki koodi teeman jakeluun',
        'preview_image_label' => 'Esikatselukuva',
        'preview_image_placeholder' => 'Polku teeman esikatselukuvaan.',
        'dir_name_label' => 'Hakemiston nimi',
        'dir_name_create_label' => 'Teeman kohdehakemisto',
        'theme_label' => 'Teema',
        'theme_title' => 'Teemat',
        'activate_button' => 'Aktivoi',
        'active_button' => 'Aktivoi',
        'customize_theme' => 'Muokkaa teemaa',
        'customize_button' => 'Muokkaa',
        'duplicate_button' => 'Monista',
        'duplicate_title' => 'Monista teema',
        'duplicate_theme_success' => 'Teema monistettu!',
        'manage_button' => 'Hallitse',
        'manage_title' => 'Hallitse teemaa',
        'edit_properties_title' => 'Teema',
        'edit_properties_button' => 'Muokkaa ominaisuuksia',
        'save_properties' => 'Tallenna ominaisuudet',
        'import_button' => 'Tuo',
        'import_title' => 'Tuo teema',
        'import_theme_success' => 'Teema tuotu!',
        'import_uploaded_file' => 'Teemaarkistotiedosto',
        'import_overwrite_label' => 'Ylikirjoita olemassaolevat tiedostot',
        'import_overwrite_comment' => 'Poistä tämä käytöstä tuodaksesi vain uudet tiedostot',
        'import_folders_label' => 'Kansiot',
        'import_folders_comment' => 'Valitse teeman kansiot, jotka haluat tuoda.',
        'export_button' => 'Vie',
        'export_title' => 'Vie teema',
        'export_folders_label' => 'Kansiot',
        'export_folders_comment' => 'Valitse teeman kansiot, jotka haluat viedä',
        'delete_button' => 'Poista',
        'delete_confirm' => 'Poista tämä teema? Toimintoa ei voi perua!',
        'delete_active_theme_failed' => 'Aktiivista teemaa ei voida poistaa. Koita ensin tehdä jostain muusta teemasta aktiivinen.',
        'delete_theme_success' => 'Teema poistettu!',
        'create_title' => 'Luo teema',
        'create_button' => 'Luo',
        'create_new_blank_theme' => 'Luo uusi tyhjä teema',
        'create_theme_success' => 'Teema luotu!',
        'create_theme_required_name' => 'Kerro nimi teemalle.',
        'new_directory_name_label' => 'Teeman hakemisto',
        'new_directory_name_comment' => 'Anna uusi hakemisto monistetulle teemalle.',
        'dir_name_invalid' => 'Nimi voi sisältää ainoastaan numeroja, latinalaisia kirjaimia sekä seuraavia merkkejä: _-',
        'dir_name_taken' => 'Haluttu teemakansio on jo olemassa.',
        'find_more_themes' => 'Etsi lisää teemoja',
        'saving' => 'Tallennetaan teemaa...',
        'return' => 'Palaa teemalistaan'
    ],
    'maintenance' => [
        'settings_menu' => 'Huoltotila',
        'settings_menu_description' => 'Muokkaa huoltotilan sivua ja valitse asetus.',
        'is_enabled' => 'Ota huoltotila käyttöön',
        'is_enabled_comment' => 'Valitse sivu näytettäväksi kun huoltotila on käytössä.',
        'hint' => 'Huoltotila näyttää huoltosivun vierailijoille, jotka eivät ole kirjautuneena hallintapaneeliin.'
    ],
    'page' => [
        'not_found_name' => "Sivua ':name' ei löydy",
        'not_found' => [
            'label' => 'Sivua ei löydy',
            'help' => 'Pyydettyä sivua ei voitu löytää requested page cannot be found.'
        ],
        'custom_error' => [
            'label' => 'Sivuvirhe',
            'help' => 'Olemme pahoillamme, mutta jotain meni pieleen ja sivua ei voida näyttää.'
        ],
        'menu_label' => 'Sivut',
        'unsaved_label' => 'Tallentamattomat sivut',
        'no_list_records' => 'Sivuja ei löytynyt',
        'new' => 'Uusi sivu',
        'invalid_url' => 'Sivun URL ei ole kelvollinen. URL täytyy alkaa kauttamerkillä ja saa sisältää ainoastaan numeroita, latinalaisia kirjaimia sekä seuraavia merkkejä: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Poista valitut sivut?',
        'delete_confirm_single' => 'Poista tämä sivu?',
        'no_layout' => '-- ei ulkoasua --',
        'cms_page' => 'CMS sivu',
        'title' => 'Sivun otsikko',
        'url' => 'Sivun URL',
        'file_name' => 'Sivun tiedostonimi'
    ],
    'layout' => [
        'not_found_name' => "Ulkoasua ':name' ei löydy",
        'menu_label' => 'Ulkoasut',
        'unsaved_label' => 'Tallentamattomat ulkoasut',
        'no_list_records' => 'Ulkoasuja ei löydy',
        'new' => 'Uusi ulkoasu',
        'delete_confirm_multiple' => 'Poista valitut ulkoasut?',
        'delete_confirm_single' => 'Poista tämä ulkoasu?'
    ],
    'partial' => [
        'not_found_name' => "Osaa ':name' ei löydy.",
        'invalid_name' => 'Osan nimi: :name ei ole kelvollinen.',
        'menu_label' => 'Osat',
        'unsaved_label' => 'Tallentamattomat osat',
        'no_list_records' => 'Osia ei löydy',
        'delete_confirm_multiple' => 'Poista valitut osat?',
        'delete_confirm_single' => 'Poista tämä osa?',
        'new' => 'Uusi osa'
    ],
    'content' => [
        'not_found_name' => "Sisältötiedostoa ':name' ei löydy.",
        'menu_label' => 'Sisältö',
        'unsaved_label' => 'Tallentamattomat sisällöt',
        'no_list_records' => 'Sisältötiedostoja ei löydy',
        'delete_confirm_multiple' => 'Poista valitut sisältötiedostot tai hakemistot?',
        'delete_confirm_single' => 'Poista tämä sisältötiedosto?',
        'new' => 'Uusi sisältötiedosto'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Ajax käsittelijän nimi: :name ei ole kelvollinen.',
        'not_found' => "AJAX käsittelijää ':name' ei löydy."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Lisää',
        'search' => 'Hae...'
    ],
    'editor' => [
        'settings' => 'Asetukset',
        'title' => 'Otsikko',
        'new_title' => 'Uuden sivun otsikko',
        'url' => 'URL',
        'filename' => 'Tiedostonimi',
        'layout' => 'Ulkoasu',
        'description' => 'Kuvaus',
        'preview' => 'Esikatsele',
        'meta' => 'Meta',
        'meta_title' => 'Meta Otsikko',
        'meta_description' => 'Meta Kuvaus',
        'markup' => 'Merkintäkieli',
        'code' => 'Koodi',
        'content' => 'Sisältö',
        'hidden' => 'Piilotettu',
        'hidden_comment' => 'Piilotetut sivut ovat saatavilla ainoastaan hallintapaneeliin kirjautuneille käyttäjille.',
        'enter_fullscreen' => 'Siirru kokoruudun tilaan',
        'exit_fullscreen' => 'Poistu kokoruudun tilasta',
        'open_searchbox' => 'Avaa haku',
        'close_searchbox'  => 'Sulje haku',
        'open_replacebox' => 'Avaa korvaa',
        'close_replacebox'  => 'Sulje korvaa'
    ],
    'asset' => [
        'menu_label' => 'Omaisuudet',
        'unsaved_label' => 'Tallentamattomat omaisuudet',
        'drop_down_add_title' => 'Lisää...',
        'drop_down_operation_title' => 'Toiminnot...',
        'upload_files' => 'Lähetä tiedosto(ja)',
        'create_file' => 'Luo tiedosto',
        'create_directory' => 'Luo hakemisto',
        'directory_popup_title' => 'Uusi hakemisto',
        'directory_name' => 'Hakemiston nimi',
        'rename' => 'Nimeä uudelleen',
        'delete' => 'Poista',
        'move' => 'Siirrä',
        'select' => 'Valitse',
        'new' => 'Uusi tiedosto',
        'rename_popup_title' => 'Nimeä uudelleen',
        'rename_new_name' => 'Uusi nimi',
        'invalid_path' => 'Polku voi sisältää ainoastaan numeroita, latinalaisia kirjaimia, välilyöntejä sekä seuraavia merkkejä: ._-/',
        'error_deleting_file' => 'Virhe poistaessa tiedostoa :name.',
        'error_deleting_dir_not_empty' => 'Virhe poistaessa hakemistoa :name. Hakemisto ei ole tyhjä.',
        'error_deleting_dir' => 'Virhe poistaessa hakemistoa :name.',
        'invalid_name' => 'Nimi voi sisältää ainoastaan numeroita, latinalaisia kirjaimia, vävälilyöntejä sekä seuraavia merkkejä: ._-',
        'original_not_found' => 'Alkuperäistä tiedostoa tai hakemistoa ei löydy',
        'already_exists' => 'Tiedosto tai hakemisto tällä nimillä on jo olemassa',
        'error_renaming' => 'Virhe tiedoston tai hakemiston uudelleennimeämisessä',
        'name_cant_be_empty' => 'Nimi ei voi olla tyhjä',
        'too_large' => 'Ladattu tiedosto on liian suuri. Suurin sallittu tiedostokoko on :max_size',
        'type_not_allowed' => 'Vain seuraavat tiedostotyypit ovat sallittuja: :allowed_types',
        'file_not_valid' => 'Tiedosto ei ole kelvollinen',
        'error_uploading_file' => "Virhe lähettäessä tiedostoa ':name': :error",
        'move_please_select' => 'valitse',
        'move_destination' => 'Kohdehakemisto',
        'move_popup_title' => 'Siirrä omaisuuksia',
        'move_button' => 'Siirrä',
        'selected_files_not_found' => 'Valittuja tiedostoja ei löydy',
        'select_destination_dir' => 'Valitse kohdehakemisto',
        'destination_not_found' => 'Kohdehakemistoa ei löydy',
        'error_moving_file' => 'Virhe siirtäessä tiedostoa :file',
        'error_moving_directory' => 'Virhe siirtäessä hakemistoa :dir',
        'error_deleting_directory' => 'Virhe poistaessa alkuperäsitä hakemistoa :dir',
        'no_list_records' => 'Tiedostoja ei löydy',
        'delete_confirm' => 'Poista valitut tiedostot tai hakemistot?',
        'path' => 'Polku'
    ],
    'component' => [
        'menu_label' => 'Komponentit',
        'unnamed' => 'Nimetön',
        'no_description' => 'Kuvausta ei annettu',
        'alias' => 'Alias',
        'alias_description' => 'Uniikki nimi komponentille kun käytössä sivulla tai ulkoasun koodissa.',
        'validation_message' => 'Komponentin alias on vaadittu ja se voi sisältää ainoastaan latinalaisia kirjaimia, numeroita ja alaviivoja. Aliasien pitäisi alkaa latinalaisella kirjaimella.',
        'invalid_request' => 'Mallia ei voida tallentaa koska komponentin tiedot eivät ole kelvollisia.',
        'no_records' => 'Komponentteja ei löydy',
        'not_found' => "Komponenttia ':name' ei löydy.",
        'method_not_found' => "Komponentti ':name' ei sisällä metodia ':method'."
    ],
    'template' => [
        'invalid_type' => 'Tuntematon mallin tyyppi.',
        'not_found' => 'Mallia ei löydy.',
        'saved' => 'Malli tallennettu.',
        'no_list_records' => 'Tietoja ei löydy',
        'delete_confirm' => 'Poista valitut mallit?',
        'order_by' => 'Suodata'
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Hallitse verkkosivun sisältötiedostoja',
        'manage_assets' => 'Hallitse verkkosivun omaisuuksia - kuvia, JavaScript tiedostoja, CSS tiedostoja',
        'manage_pages' => 'Luo, muokkaa ja poista sivuja',
        'manage_layouts' => 'Luo, muokkaa ja poista CMS ulkoasuja',
        'manage_partials' => 'Luo, muokkaa ja poista CMS osia',
        'manage_themes' => 'Aktivoi, deaktivoi ja muokkaa CMS teemoja',
    ],
    'theme_log' => [
        'hint' => 'Tämä loki näyttää muutokset teemaan järjestelmänvalvojilta hallintapaneelissa.',
        'menu_label' => 'Teemaloki',
        'menu_description' => 'Katso tehdyt muutokset aktiiviseen teemaan.',
        'empty_link' => 'Tyhjää teemaloki',
        'empty_loading' => 'Tyhjätään teemaloki...',
        'empty_success' => 'Teemaloki tyhjätty',
        'return_link' => 'Palaa teemalokiin',
        'id' => 'ID',
        'id_label' => 'Loki ID',
        'created_at' => 'Päivämäärä ja aika',
        'user' => 'Käyttäjä',
        'type' => 'Tyyppi',
        'type_create' => 'Luo',
        'type_update' => 'Muokkaa',
        'type_delete' => 'Poista',
        'theme_name' => 'Teema',
        'theme_code' => 'Teeman koodi',
        'old_template' => 'Teema (vanha)',
        'new_template' => 'Teema (uusi)',
        'template' => 'Teema',
        'diff' => 'Muutokset',
        'old_value' => 'Vanha arvo',
        'new_value' => 'Uusi arvo',
        'preview_title' => 'Mallimuutokset',
        'template_updated' => 'Malli päivitetty',
        'template_created' => 'Malli luotu',
        'template_deleted' => 'Malli poistettu',
    ],
];
