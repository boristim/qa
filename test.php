<?php
array(
  '#node_edit_form' => true,
  '#attributes' =>
    array(
      'class' =>
        array(
          0 => 'node-form',
          1 => 'node-answer-form',
        ),
    ),
  'nid' =>
    array(
      '#type' => 'value',
      '#value' => NULL,
    ),
  'vid' =>
    array(
      '#type' => 'value',
      '#value' => NULL,
    ),
  'uid' =>
    array(
      '#type' => 'value',
      '#value' => 0,
    ),
  'created' =>
    array(
      '#type' => 'value',
      '#value' => 1558364839,
    ),
  'type' =>
    array(
      '#type' => 'value',
      '#value' => 'answer',
    ),
  'language' =>
    array(
      '#type' => 'value',
      '#value' => 'ru',
    ),
  'changed' =>
    array(
      '#type' => 'hidden',
      '#default_value' => NULL,
    ),
  'title' =>
    array(
      '#type' => 'textfield',
      '#title' => 'Title',
      '#required' => true,
      '#default_value' => NULL,
      '#maxlength' => 255,
      '#weight' => -5,
    ),
  '#node' =>
    stdClass::__set_state(array(
      'uid' => 0,
      'name' => '',
      'type' => 'answer',
      'language' => 'und',
      'title' => NULL,
      'status' => 0,
      'promote' => 0,
      'sticky' => 0,
      'created' => 1558364839,
      'revision' => false,
      'menu' =>
        array(
          'link_title' => '',
          'mlid' => 0,
          'plid' => 0,
          'menu_name' => 'main-menu',
          'weight' => 0,
          'options' =>
            array(),
          'module' => 'menu',
          'expanded' => 0,
          'hidden' => 0,
          'has_children' => 0,
          'customized' => 0,
          'parent_depth_limit' => 8,
        ),
    )),
  'additional_settings' =>
    array(
      '#type' => 'vertical_tabs',
      '#weight' => 99,
    ),
  'revision_information' =>
    array(
      '#type' => 'fieldset',
      '#title' => 'Информация о редакции',
      '#collapsible' => true,
      '#collapsed' => true,
      '#group' => 'additional_settings',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'node-form-revision-information',
            ),
        ),
      '#attached' =>
        array(
          'js' =>
            array(
              0 => 'modules/node/node.js',
            ),
        ),
      '#weight' => 20,
      '#access' => false,
      'revision' =>
        array(
          '#type' => 'checkbox',
          '#title' => 'Создать новую редакцию',
          '#default_value' => false,
          '#access' => false,
          '#states' =>
            array(
              'checked' =>
                array(
                  'textarea[name="log"]' =>
                    array(
                      'empty' => false,
                    ),
                ),
            ),
        ),
      'log' =>
        array(
          '#type' => 'textarea',
          '#title' => 'Сообщение в журнал о редакции',
          '#rows' => 4,
          '#default_value' => '',
          '#description' => 'Объясняйте вносимые вами изменения. Это поможет другим авторам понять, чем вы руководствовались, внося эти изменения.',
        ),
    ),
  'author' =>
    array(
      '#type' => 'fieldset',
      '#access' => false,
      '#title' => 'Информация об авторе',
      '#collapsible' => true,
      '#collapsed' => true,
      '#group' => 'additional_settings',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'node-form-author',
            ),
        ),
      '#attached' =>
        array(
          'js' =>
            array(
              0 => 'modules/node/node.js',
              1 =>
                array(
                  'type' => 'setting',
                  'data' =>
                    array(
                      'anonymous' => 'Гость',
                    ),
                ),
            ),
        ),
      '#weight' => 90,
      'name' =>
        array(
          '#type' => 'textfield',
          '#title' => 'Автор',
          '#maxlength' => 60,
          '#autocomplete_path' => 'user/autocomplete',
          '#default_value' => '',
          '#weight' => -1,
          '#description' => 'Если поле оставить пустым, автором будет <em class="placeholder">Гость</em>.',
        ),
      'date' =>
        array(
          '#type' => 'textfield',
          '#title' => 'Время создания',
          '#maxlength' => 25,
          '#description' => 'Формат: <em class="placeholder">2019-05-20 20:07:19 +0500</em>. Формат даты - YYYY-MM-DD, часовой пояс <em class="placeholder">+0500</em> - смещение по UTC. Оставьте пустым, чтобы использовать время отправки формы.',
          '#default_value' => '',
        ),
    ),
  'options' =>
    array(
      '#type' => 'fieldset',
      '#access' => false,
      '#title' => 'Настройки публикации',
      '#collapsible' => true,
      '#collapsed' => true,
      '#group' => 'additional_settings',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'node-form-options',
            ),
        ),
      '#attached' =>
        array(
          'js' =>
            array(
              0 => 'modules/node/node.js',
            ),
        ),
      '#weight' => 95,
      'status' =>
        array(
          '#type' => 'checkbox',
          '#title' => 'Опубликовано',
          '#default_value' => 0,
        ),
      'promote' =>
        array(
          '#type' => 'checkbox',
          '#title' => 'Помещено на главную страницу',
          '#default_value' => 0,
        ),
      'sticky' =>
        array(
          '#type' => 'checkbox',
          '#title' => 'Закреплять вверху списков',
          '#default_value' => 0,
        ),
    ),
  'actions' =>
    array(
      '#type' => 'actions',
      'submit' =>
        array(
          '#type' => 'submit',
          '#access' => true,
          '#value' => 'Сохранить',
          '#weight' => 5,
          '#submit' =>
            array(
              0 => 'node_form_submit',
            ),
        ),
      'preview' =>
        array(
          '#access' => false,
          '#type' => 'submit',
          '#value' => 'Предпросмотр',
          '#weight' => 10,
          '#submit' =>
            array(
              0 => 'node_form_build_preview',
            ),
        ),
    ),
  '#validate' =>
    array(
      0 => 'node_form_validate',
    ),
  '#submit' =>
    array(
      0 => 'ocupload_change_files_status',
      1 => 'metatag_metatags_form_submit',
      2 => 'locale_field_node_form_submit',
    ),
  '#parents' =>
    array(),
  '#entity' =>
    stdClass::__set_state(array(
      'uid' => 0,
      'name' => '',
      'type' => 'answer',
      'language' => 'und',
      'title' => NULL,
      'status' => 0,
      'promote' => 0,
      'sticky' => 0,
      'created' => 1558364839,
      'revision' => false,
      'menu' =>
        array(
          'link_title' => '',
          'mlid' => 0,
          'plid' => 0,
          'menu_name' => 'main-menu',
          'weight' => 0,
          'options' =>
            array(),
          'module' => 'menu',
          'expanded' => 0,
          'hidden' => 0,
          'has_children' => 0,
          'customized' => 0,
          'parent_depth_limit' => 8,
        ),
    )),
  'body' =>
    array(
      '#type' => 'container',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'field-type-text-with-summary',
              1 => 'field-name-body',
              2 => 'field-widget-text-textarea-with-summary',
            ),
        ),
      '#weight' => '-4',
      '#tree' => true,
      '#language' => 'und',
      'und' =>
        array(
          0 =>
            array(
              '#entity_type' => 'node',
              '#entity' =>
                stdClass::__set_state(array(
                  'uid' => 0,
                  'name' => '',
                  'type' => 'answer',
                  'language' => 'und',
                  'title' => NULL,
                  'status' => 0,
                  'promote' => 0,
                  'sticky' => 0,
                  'created' => 1558364839,
                  'revision' => false,
                  'menu' =>
                    array(
                      'link_title' => '',
                      'mlid' => 0,
                      'plid' => 0,
                      'menu_name' => 'main-menu',
                      'weight' => 0,
                      'options' =>
                        array(),
                      'module' => 'menu',
                      'expanded' => 0,
                      'hidden' => 0,
                      'has_children' => 0,
                      'customized' => 0,
                      'parent_depth_limit' => 8,
                    ),
                )),
              '#bundle' => 'answer',
              '#field_name' => 'body',
              '#language' => 'und',
              '#field_parents' =>
                array(),
              '#columns' =>
                array(
                  0 => 'value',
                  1 => 'summary',
                  2 => 'format',
                ),
              '#title' => 'Ответ',
              '#description' => '',
              '#required' => true,
              '#delta' => 0,
              '#weight' => 0,
              'value' =>
                array(
                  '#entity_type' => 'node',
                  '#entity' =>
                    stdClass::__set_state(array(
                      'uid' => 0,
                      'name' => '',
                      'type' => 'answer',
                      'language' => 'und',
                      'title' => NULL,
                      'status' => 0,
                      'promote' => 0,
                      'sticky' => 0,
                      'created' => 1558364839,
                      'revision' => false,
                      'menu' =>
                        array(
                          'link_title' => '',
                          'mlid' => 0,
                          'plid' => 0,
                          'menu_name' => 'main-menu',
                          'weight' => 0,
                          'options' =>
                            array(),
                          'module' => 'menu',
                          'expanded' => 0,
                          'hidden' => 0,
                          'has_children' => 0,
                          'customized' => 0,
                          'parent_depth_limit' => 8,
                        ),
                    )),
                  '#bundle' => 'answer',
                  '#field_name' => 'body',
                  '#language' => 'und',
                  '#field_parents' =>
                    array(),
                  '#columns' =>
                    array(
                      0 => 'value',
                      1 => 'summary',
                      2 => 'format',
                    ),
                  '#title' => 'Ответ',
                  '#description' => '',
                  '#required' => true,
                  '#delta' => 0,
                  '#weight' => 0,
                  '#type' => 'textarea',
                  '#default_value' => NULL,
                  '#rows' => '3',
                  '#attributes' =>
                    array(
                      'class' =>
                        array(
                          0 => 'text-full',
                        ),
                    ),
                ),
              'summary' =>
                array(
                  '#type' => 'value',
                  '#default_value' => NULL,
                  '#title' => 'Сводка',
                  '#rows' => 5,
                  '#description' => 'Оставьте поле пустым, чтобы анонс сформировался из первых фраз полного содержимого материала.',
                  '#attached' =>
                    array(
                      'js' =>
                        array(
                          0 => 'modules/field/modules/text/text.js',
                        ),
                    ),
                  '#attributes' =>
                    array(
                      'class' =>
                        array(
                          0 => 'text-summary',
                        ),
                    ),
                  '#prefix' => '<div class="text-summary-wrapper">',
                  '#suffix' => '</div>',
                  '#weight' => -10,
                ),
            ),
          '#theme' => 'field_multiple_value_form',
          '#field_name' => 'body',
          '#cardinality' => '1',
          '#title' => 'Ответ',
          '#required' => 1,
          '#description' => '',
          '#prefix' => '<div id="body-add-more-wrapper">',
          '#suffix' => '</div>',
          '#max_delta' => 0,
          '#after_build' =>
            array(
              0 => 'field_form_element_after_build',
            ),
          '#language' => 'und',
          '#field_parents' =>
            array(),
        ),
      '#access' => true,
    ),
  'field_rate' =>
    array(
      '#type' => 'container',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'field-type-number-integer',
              1 => 'field-name-field-rate',
              2 => 'field-widget-number',
            ),
        ),
      '#weight' => '-3',
      '#tree' => true,
      '#language' => 'und',
      'und' =>
        array(
          0 =>
            array(
              'value' =>
                array(
                  '#entity_type' => 'node',
                  '#entity' =>
                    stdClass::__set_state(array(
                      'uid' => 0,
                      'name' => '',
                      'type' => 'answer',
                      'language' => 'und',
                      'title' => NULL,
                      'status' => 0,
                      'promote' => 0,
                      'sticky' => 0,
                      'created' => 1558364839,
                      'revision' => false,
                      'menu' =>
                        array(
                          'link_title' => '',
                          'mlid' => 0,
                          'plid' => 0,
                          'menu_name' => 'main-menu',
                          'weight' => 0,
                          'options' =>
                            array(),
                          'module' => 'menu',
                          'expanded' => 0,
                          'hidden' => 0,
                          'has_children' => 0,
                          'customized' => 0,
                          'parent_depth_limit' => 8,
                        ),
                    )),
                  '#bundle' => 'answer',
                  '#field_name' => 'field_rate',
                  '#language' => 'und',
                  '#field_parents' =>
                    array(),
                  '#columns' =>
                    array(
                      0 => 'value',
                    ),
                  '#title' => 'Рейтинг',
                  '#description' => '',
                  '#required' => true,
                  '#delta' => 0,
                  '#weight' => 0,
                  '#type' => 'textfield',
                  '#default_value' => '0',
                  '#size' => 12,
                  '#maxlength' => 10,
                  '#number_type' => 'integer',
                  '#element_validate' =>
                    array(
                      0 => 'number_field_widget_validate',
                    ),
                ),
            ),
          '#theme' => 'field_multiple_value_form',
          '#field_name' => 'field_rate',
          '#cardinality' => '1',
          '#title' => 'Рейтинг',
          '#required' => 1,
          '#description' => '',
          '#prefix' => '<div id="field-rate-add-more-wrapper">',
          '#suffix' => '</div>',
          '#max_delta' => 0,
          '#after_build' =>
            array(
              0 => 'field_form_element_after_build',
            ),
          '#language' => 'und',
          '#field_parents' =>
            array(),
        ),
      '#access' => true,
    ),
  'field_question_ref' =>
    array(
      '#type' => 'container',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'field-type-entityreference',
              1 => 'field-name-field-question-ref',
              2 => 'field-widget-options-select',
            ),
        ),
      '#weight' => '-2',
      '#tree' => true,
      '#language' => 'und',
      'und' =>
        array(
          '#entity' =>
            stdClass::__set_state(array(
              'uid' => 0,
              'name' => '',
              'type' => 'answer',
              'language' => 'und',
              'title' => NULL,
              'status' => 0,
              'promote' => 0,
              'sticky' => 0,
              'created' => 1558364839,
              'revision' => false,
              'menu' =>
                array(
                  'link_title' => '',
                  'mlid' => 0,
                  'plid' => 0,
                  'menu_name' => 'main-menu',
                  'weight' => 0,
                  'options' =>
                    array(),
                  'module' => 'menu',
                  'expanded' => 0,
                  'hidden' => 0,
                  'has_children' => 0,
                  'customized' => 0,
                  'parent_depth_limit' => 8,
                ),
            )),
          '#entity_type' => 'node',
          '#bundle' => 'answer',
          '#field_name' => 'field_question_ref',
          '#language' => 'und',
          '#field_parents' =>
            array(),
          '#columns' =>
            array(
              0 => 'target_id',
            ),
          '#title' => 'Вопрос',
          '#description' => '',
          '#required' => true,
          '#delta' => 0,
          '#type' => 'select',
          '#default_value' =>
            array(),
          '#multiple' => false,
          '#options' =>
            array(
              '_none' => '- Выберите значение -',
              1 => 'укажите ряд с наречиями меры и степени
',
              2 => 'какими интернет магазинами вы пользуетесь?
',
              3 => 'Как изменится  ставка процента при прочих равных условиях, если ЦБ проведет денежную реформу
',
              131 => 'Как людям трубы лучше прочищать?',
              141 => 'Вопрос. Как очистить воду от железа? Фильтры и системы',
              146 => 'Как смягчить воду?',
            ),
          '#value_key' => 'target_id',
          '#element_validate' =>
            array(
              0 => 'options_field_widget_validate',
            ),
          '#properties' =>
            array(
              'strip_tags_and_unescape' => true,
              'optgroups' => true,
              'empty_option' => 'option_select',
              'filter_xss' => false,
              'strip_tags' => false,
            ),
          '#after_build' =>
            array(
              0 => 'field_form_element_after_build',
            ),
        ),
      '#access' => true,
    ),
  'field_qa_picture' =>
    array(
      '#type' => 'container',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'field-type-image',
              1 => 'field-name-field-qa-picture',
              2 => 'field-widget-image-image',
            ),
        ),
      '#weight' => '0',
      '#tree' => true,
      '#language' => 'und',
      'und' =>
        array(
          0 =>
            array(
              '#entity' =>
                stdClass::__set_state(array(
                  'uid' => 0,
                  'name' => '',
                  'type' => 'answer',
                  'language' => 'und',
                  'title' => NULL,
                  'status' => 0,
                  'promote' => 0,
                  'sticky' => 0,
                  'created' => 1558364839,
                  'revision' => false,
                  'menu' =>
                    array(
                      'link_title' => '',
                      'mlid' => 0,
                      'plid' => 0,
                      'menu_name' => 'main-menu',
                      'weight' => 0,
                      'options' =>
                        array(),
                      'module' => 'menu',
                      'expanded' => 0,
                      'hidden' => 0,
                      'has_children' => 0,
                      'customized' => 0,
                      'parent_depth_limit' => 8,
                    ),
                )),
              '#entity_type' => 'node',
              '#bundle' => 'answer',
              '#field_name' => 'field_qa_picture',
              '#language' => 'und',
              '#field_parents' =>
                array(),
              '#columns' =>
                array(
                  0 => 'fid',
                  1 => 'alt',
                  2 => 'title',
                  3 => 'width',
                  4 => 'height',
                ),
              '#title' => 'Картинка',
              '#description' => '<a href="#" data-toggle="popover" data-target="#upload-instructions--2" data-html="1" data-placement="bottom" data-title="File requirements"><span class="icon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
 Подробнее</a><div id="upload-instructions--2" class="element-invisible help-block"><ul><li>Максимальный размер файла: <strong>999 МБ</strong>.</li>
<li>Допустимые типы файлов: <strong>png gif jpg jpeg</strong>.</li>
</ul></div>',
              '#required' => false,
              '#delta' => 0,
              '#type' => 'managed_file',
              '#upload_location' => 'public://',
              '#upload_validators' =>
                array(
                  'file_validate_size' =>
                    array(
                      0 => 1047527424.0,
                    ),
                  'file_validate_extensions' =>
                    array(
                      0 => 'png gif jpg jpeg',
                    ),
                ),
              '#value_callback' => 'file_field_widget_value',
              '#process' =>
                array(
                  0 => 'file_managed_file_process',
                  1 => 'bootstrap_form_process',
                  2 => 'file_field_widget_process',
                  3 => 'image_field_widget_process',
                  4 => '_bootstrap_image_field_widget_process',
                ),
              '#progress_indicator' => 'throbber',
              '#extended' => true,
              '#default_value' =>
                array(
                  'fid' => 0,
                  'display' => false,
                  'description' => '',
                ),
            ),
          '#after_build' =>
            array(
              0 => 'field_form_element_after_build',
            ),
          '#field_name' => 'field_qa_picture',
          '#language' => 'und',
          '#field_parents' =>
            array(),
        ),
      '#access' => true,
    ),
  'field_video_link' =>
    array(
      '#type' => 'container',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'field-type-text',
              1 => 'field-name-field-video-link',
              2 => 'field-widget-text-textfield',
            ),
        ),
      '#weight' => '1',
      '#tree' => true,
      '#language' => 'und',
      'und' =>
        array(
          0 =>
            array(
              '#entity_type' => 'node',
              '#entity' =>
                stdClass::__set_state(array(
                  'uid' => 0,
                  'name' => '',
                  'type' => 'answer',
                  'language' => 'und',
                  'title' => NULL,
                  'status' => 0,
                  'promote' => 0,
                  'sticky' => 0,
                  'created' => 1558364839,
                  'revision' => false,
                  'menu' =>
                    array(
                      'link_title' => '',
                      'mlid' => 0,
                      'plid' => 0,
                      'menu_name' => 'main-menu',
                      'weight' => 0,
                      'options' =>
                        array(),
                      'module' => 'menu',
                      'expanded' => 0,
                      'hidden' => 0,
                      'has_children' => 0,
                      'customized' => 0,
                      'parent_depth_limit' => 8,
                    ),
                )),
              '#bundle' => 'answer',
              '#field_name' => 'field_video_link',
              '#language' => 'und',
              '#field_parents' =>
                array(),
              '#columns' =>
                array(
                  0 => 'value',
                  1 => 'format',
                ),
              '#title' => 'Видео',
              '#description' => '',
              '#required' => false,
              '#delta' => 0,
              '#weight' => 0,
              'value' =>
                array(
                  '#entity_type' => 'node',
                  '#entity' =>
                    stdClass::__set_state(array(
                      'uid' => 0,
                      'name' => '',
                      'type' => 'answer',
                      'language' => 'und',
                      'title' => NULL,
                      'status' => 0,
                      'promote' => 0,
                      'sticky' => 0,
                      'created' => 1558364839,
                      'revision' => false,
                      'menu' =>
                        array(
                          'link_title' => '',
                          'mlid' => 0,
                          'plid' => 0,
                          'menu_name' => 'main-menu',
                          'weight' => 0,
                          'options' =>
                            array(),
                          'module' => 'menu',
                          'expanded' => 0,
                          'hidden' => 0,
                          'has_children' => 0,
                          'customized' => 0,
                          'parent_depth_limit' => 8,
                        ),
                    )),
                  '#bundle' => 'answer',
                  '#field_name' => 'field_video_link',
                  '#language' => 'und',
                  '#field_parents' =>
                    array(),
                  '#columns' =>
                    array(
                      0 => 'value',
                      1 => 'format',
                    ),
                  '#title' => 'Видео',
                  '#description' => '',
                  '#required' => false,
                  '#delta' => 0,
                  '#weight' => 0,
                  '#type' => 'textfield',
                  '#default_value' => NULL,
                  '#size' => '60',
                  '#maxlength' => '255',
                  '#attributes' =>
                    array(
                      'class' =>
                        array(
                          0 => 'text-full',
                        ),
                    ),
                ),
            ),
          '#theme' => 'field_multiple_value_form',
          '#field_name' => 'field_video_link',
          '#cardinality' => '1',
          '#title' => 'Видео',
          '#required' => 0,
          '#description' => '',
          '#prefix' => '<div id="field-video-link-add-more-wrapper">',
          '#suffix' => '</div>',
          '#max_delta' => 0,
          '#after_build' =>
            array(
              0 => 'field_form_element_after_build',
            ),
          '#language' => 'und',
          '#field_parents' =>
            array(),
        ),
      '#access' => true,
    ),
  '#pre_render' =>
    array(
      0 => '_field_extra_fields_pre_render',
    ),
  '#entity_type' => 'node',
  '#bundle' => 'answer',
  '#form_id' => 'answer_node_form',
  '#type' => 'form',
  '#build_id' => 'form-YUyC3m0dRU_1KIrIjhOkZCh2G1tjVSAQ1KnvtxtJuyo',
  'form_build_id' =>
    array(
      '#type' => 'hidden',
      '#value' => 'form-YUyC3m0dRU_1KIrIjhOkZCh2G1tjVSAQ1KnvtxtJuyo',
      '#id' => 'form-YUyC3m0dRU_1KIrIjhOkZCh2G1tjVSAQ1KnvtxtJuyo',
      '#name' => 'form_build_id',
      '#parents' =>
        array(
          0 => 'form_build_id',
        ),
    ),
  'form_id' =>
    array(
      '#type' => 'hidden',
      '#value' => 'answer_node_form',
      '#id' => 'edit-answer-node-form',
      '#parents' =>
        array(
          0 => 'form_id',
        ),
    ),
  '#id' => 'answer-node-form',
  '#method' => 'post',
  '#action' => '/ru/kak-smyagchit-vodu',
  '#theme_wrappers' =>
    array(
      0 => 'form',
    ),
  '#icon' => NULL,
  '#icon_position' => 'before',
  '#process' =>
    array(
      0 => 'bootstrap_form_process',
    ),
  '#tree' => false,
  '#theme' =>
    array(
      0 => 'answer_node_form',
      1 => 'node_form',
    ),
  'captcha' =>
    array(
      '#type' => 'captcha',
      '#captcha_type' => 'hidden_captcha/Hidden CAPTCHA',
      '#description' => 'Этот вопрос задается для того, чтобы выяснить, являетесь ли Вы человеком или представляете из себя автоматическую спам-рассылку.',
      '#weight' => 98.900000000000005684341886080801486968994140625,
    ),
  'menu' =>
    array(
      '#type' => 'fieldset',
      '#title' => 'Настройки меню',
      '#access' => false,
      '#collapsible' => true,
      '#collapsed' => true,
      '#group' => 'additional_settings',
      '#attached' =>
        array(
          'js' =>
            array(
              0 => 'modules/menu/menu.js',
            ),
        ),
      '#tree' => true,
      '#weight' => -2,
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'menu-link-form',
            ),
        ),
      'enabled' =>
        array(
          '#type' => 'checkbox',
          '#title' => 'Создать ссылку в меню',
          '#default_value' => 0,
        ),
      'link' =>
        array(
          '#type' => 'container',
          '#parents' =>
            array(
              0 => 'menu',
            ),
          '#states' =>
            array(
              'invisible' =>
                array(
                  'input[name="menu[enabled]"]' =>
                    array(
                      'checked' => false,
                    ),
                ),
            ),
          'mlid' =>
            array(
              '#type' => 'value',
              '#value' => 0,
            ),
          'module' =>
            array(
              '#type' => 'value',
              '#value' => 'menu',
            ),
          'hidden' =>
            array(
              '#type' => 'value',
              '#value' => 0,
            ),
          'has_children' =>
            array(
              '#type' => 'value',
              '#value' => 0,
            ),
          'customized' =>
            array(
              '#type' => 'value',
              '#value' => 0,
            ),
          'options' =>
            array(
              '#type' => 'value',
              '#value' =>
                array(),
            ),
          'expanded' =>
            array(
              '#type' => 'value',
              '#value' => 0,
            ),
          'parent_depth_limit' =>
            array(
              '#type' => 'value',
              '#value' => 8,
            ),
          'link_title' =>
            array(
              '#type' => 'textfield',
              '#title' => 'Название ссылки меню',
              '#maxlength' => 255,
              '#default_value' => '',
            ),
          'description' =>
            array(
              '#type' => 'textarea',
              '#title' => 'Описание',
              '#default_value' => '',
              '#rows' => 1,
              '#description' => 'Описание, показываемое при наведении мыши на ссылку меню.',
            ),
          'parent' =>
            array(
              '#type' => 'select',
              '#title' => 'Родитель',
              '#default_value' => 'main-menu:0',
              '#options' =>
                array(
                  'main-menu:0' => '<Главное меню>',
                  'main-menu:238' => '-- Главная',
                  'main-menu:790' => '-- Как смягчить воду?',
                ),
              '#attributes' =>
                array(
                  'class' =>
                    array(
                      0 => 'menu-parent-select',
                    ),
                ),
            ),
          'weight' =>
            array(
              '#type' => 'weight',
              '#title' => 'Вес',
              '#delta' => 50,
              '#default_value' => 0,
              '#description' => 'Ссылки меню с более легким весом "всплывают" над ссылками более тяжелыми.',
            ),
        ),
    ),
  'metatags' =>
    array(
      '#type' => 'fieldset',
      '#title' => 'Meta tags',
      '#collapsible' => true,
      '#collapsed' => true,
      '#multilingual' => true,
      '#tree' => true,
      '#access' => false,
      '#weight' => 40,
      '#language' => 'und',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'metatags-form',
            ),
        ),
      'und' =>
        array(
          '#metatag_defaults' =>
            array(
              'title' =>
                array(
                  'value' => '[node:title] | [current-page:pager][site:name]',
                ),
              'description' =>
                array(
                  'value' => '[node:summary]',
                ),
              'article:modified_time' =>
                array(
                  'value' => '[node:changed:custom:c]',
                ),
              'article:published_time' =>
                array(
                  'value' => '[node:created:custom:c]',
                ),
              'og:description' =>
                array(
                  'value' => '[node:summary]',
                ),
              'og:title' =>
                array(
                  'value' => '[node:title]',
                ),
              'og:updated_time' =>
                array(
                  'value' => '[node:changed:custom:c]',
                ),
              'generator' =>
                array(
                  'value' => 'Drupal 7 (https://www.drupal.org)',
                ),
              'canonical' =>
                array(
                  'value' => '[current-page:url:absolute]',
                ),
              'shortlink' =>
                array(
                  'value' => '[current-page:url:unaliased]',
                ),
              'og:site_name' =>
                array(
                  'value' => '[site:name]',
                ),
              'og:type' =>
                array(
                  'value' => 'article',
                ),
              'og:url' =>
                array(
                  'value' => '[current-page:url:absolute]',
                ),
            ),
          '#type' => 'container',
          '#multilingual' => true,
          '#tree' => true,
          'basic' =>
            array(
              '#weight' => 1,
              '#collapsed' => false,
              '#type' => 'fieldset',
              '#title' => 'Basic tags',
              '#description' => '',
              '#collapsible' => true,
              'title' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Заголовок страницы',
                      '#description' => 'The text to display in the title bar of a visitor\'s web browser when they view this page. This meta tag may also be used as the title of the page when a visitor bookmarks or favorites this page.',
                      '#default_value' => '[node:title] | [current-page:pager][site:name]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:title] | [current-page:pager][site:name]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'title',
                    ),
                ),
              '#access' => false,
              'description' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textarea',
                      '#rows' => 2,
                      '#wysiwyg' => false,
                      '#title' => 'Описание',
                      '#description' => 'A brief and concise summary of the page\'s content, preferably 320 characters or less. The description meta tag may be used by search engines to display a snippet about the page in search results. This will be truncated to a maximum of <em class="placeholder">380</em> characters.',
                      '#default_value' => '[node:summary]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:summary]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'description',
                    ),
                ),
              'abstract' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textarea',
                      '#rows' => 2,
                      '#wysiwyg' => false,
                      '#title' => 'Abstract',
                      '#description' => 'A brief and concise summary of the page\'s content, preferably 150 characters or less. Where as the description meta tag may be used by search engines to display a snippet about the page in search results, the abstract tag may be used to archive a summary about the page. This meta tag is <em>no longer</em> supported by major search engines.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'abstract',
                    ),
                ),
              'keywords' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Ключевые слова',
                      '#description' => 'A comma-separated list of keywords about the page. This meta tag is <em>not</em> supported by most search engines anymore.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'keywords',
                    ),
                ),
            ),
          'advanced' =>
            array(
              '#weight' => 2,
              '#type' => 'fieldset',
              '#title' => 'Advanced tags',
              '#description' => '',
              '#collapsible' => true,
              '#collapsed' => true,
              'robots' =>
                array(
                  'value' =>
                    array(
                      '#options' =>
                        array(
                          'index' => 'Allow search engines to index this page (assumed).',
                          'follow' => 'Allow search engines to follow links on this page (assumed).',
                          'noindex' => 'Prevents search engines from indexing this page.',
                          'nofollow' => 'Prevents search engines from following links on this page.',
                          'noarchive' => 'Prevents cached copies of this page from appearing in search results.',
                          'nosnippet' => 'Prevents descriptions from appearing in search results, and prevents page caching.',
                          'noodp' => 'Blocks the <a href="http://www.dmoz.org/">Open Directory Project</a> description from appearing in search results.',
                          'noydir' => 'Prevents Yahoo! from listing this page in the <a href="http://dir.yahoo.com/">Yahoo! Directory</a>.',
                          'noimageindex' => 'Prevent search engines from indexing images on this page.',
                          'notranslate' => 'Prevent search engines from offering to translate this page in search results.',
                        ),
                      '#type' => 'checkboxes',
                      '#title' => 'Robots',
                      '#description' => 'Provides search engines with specific directions for what to do when this page is indexed.',
                      '#default_value' =>
                        array(),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'robots',
                    ),
                ),
              '#access' => false,
              'news_keywords' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Google News Keywords',
                      '#description' => 'A comma-separated list of keywords about the page. This meta tag is used as an indicator in <a href="http://support.google.com/news/publisher/bin/answer.py?hl=en&amp;answer=68297">Google News</a>.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'news_keywords',
                    ),
                ),
              'standout' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Google Standout',
                      '#description' => 'Highlight standout journalism on the web, especially for breaking news; used as an indicator in <a href="https://support.google.com/news/publisher/answer/191283?hl=en&amp;ref_topic=2484650">Google News</a>. Warning: Don\'t abuse it, to be used a maximum of 7 times per calendar week!',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'standout',
                    ),
                ),
              'rating' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'select',
                      '#options' =>
                        array(
                          'general' => 'Общий',
                          'mature' => 'Mature',
                          'restricted' => 'Restricted',
                          '14 years' => '14 years or Older',
                          'safe for kids' => 'Safe for kids',
                        ),
                      '#empty_option' => '- Не указано -',
                      '#title' => 'Content rating',
                      '#description' => 'Used to indicate the intended audience for the content.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'rating',
                    ),
                ),
              'referrer' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'select',
                      '#options' =>
                        array(
                          'no-referrer' => 'No Referrer',
                          'origin' => 'Origin',
                          'no-referrer-when-downgrade' => 'No Referrer When Downgrade',
                          'origin-when-cross-origin' => 'Origin When Cross-Origin',
                          'unsafe-url' => 'Unsafe URL',
                        ),
                      '#empty_option' => '- Не указано -',
                      '#title' => 'Referrer policy',
                      '#description' => 'Indicate to search engines and other page scrapers whether or not links should be followed. See <a href="http://w3c.github.io/webappsec/specs/referrer-policy/">the W3C specifications</a> for further details.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'referrer',
                    ),
                ),
              'rights' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Rights',
                      '#description' => 'Details about intellectual property, such as copyright or trademarks; does not automatically protect the site\'s content or intellectual property.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'rights',
                    ),
                ),
              'image_src' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Изображение',
                      '#description' => 'An image associated with this page, for use as a thumbnail in social networks and other services. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'image_src',
                    ),
                ),
              'canonical' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Canonical URL',
                      '#description' => 'Preferred page location or URL to help eliminate duplicate content for search engines.',
                      '#default_value' => '[current-page:url:absolute]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[current-page:url:absolute]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'canonical',
                    ),
                ),
              'set_cookie' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Set cookie',
                      '#description' => '<a href="https://www.metatags.org/meta_http_equiv_set_cookie">Sets a cookie</a> on the visitor\'s browser. Can be in either NAME=VALUE format, or a more verbose format including the path and expiration date; see the link for full details on the syntax. This will not be displayed if it is set to the "Language neutral" (i.e. "und").',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'set_cookie',
                    ),
                ),
              'shortlink' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Shortlink URL',
                      '#description' => 'A brief URL, often created by a URL shortening service.',
                      '#default_value' => '[current-page:url:unaliased]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[current-page:url:unaliased]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'shortlink',
                    ),
                ),
              'original-source' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Original Source',
                      '#description' => 'Used to indicate the URL that broke the story, and can link to either an internal URL or an external source. If the full URL is not known it is acceptable to use a partial URL or just the domain name.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'original-source',
                    ),
                ),
              'prev' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Previous page URL',
                      '#description' => 'Used for paginated content. Meet Google recommendations to <a href="https://support.google.com/webmasters/answer/1663744">indicate paginated content</a> by providing URL with rel="prev" link.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'prev',
                    ),
                ),
              'next' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Next page URL',
                      '#description' => 'Used for paginated content. Meet Google recommendations to <a href="https://support.google.com/webmasters/answer/1663744">indicate paginated content</a> by providing URL with rel="next" link.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'next',
                    ),
                ),
              'content-language' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Content language',
                      '#description' => 'Used to define this page\'s language code. May be the two letter language code, e.g. "de" for German, or the two letter code with a dash and the two letter ISO country code, e.g. "de-AT" for German in Austria. Still used by Bing. This will not be displayed if it is set to the "Language neutral" (i.e. "und").',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'content-language',
                    ),
                ),
              'geo.position' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Geo position',
                      '#description' => 'Geo-spatial information in "latitude;longitude" format, e.g. "50.167958;-97.133185"; <a href="http://en.wikipedia.org/wiki/Geotagging#HTML_pages">see Wikipedia for details</a>.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'geo.position',
                    ),
                ),
              'geo.placename' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Geo place name',
                      '#description' => 'A location\'s formal name.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'geo.placename',
                    ),
                ),
              'geo.region' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Geo region',
                      '#description' => 'A location\'s two-letter international country code, with an optional two-letter region, e.g. "US-NH" for New Hampshire in the USA.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'geo.region',
                    ),
                ),
              'icbm' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'ICBM',
                      '#description' => 'Geo-spatial information in "latitude, longitude" format, e.g. "50.167958, -97.133185"; <a href="https://en.wikipedia.org/wiki/ICBM_address">see Wikipedia for details</a>.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'icbm',
                    ),
                ),
              'refresh' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Обновить',
                      '#description' => 'The number of seconds to wait before refreshing the page. May also force redirect to another page using the format "5; url=http://example.com/", which would be triggered after five seconds.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'refresh',
                    ),
                ),
              'revisit-after' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Revisit After interval',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'element_validate_integer_positive',
                        ),
                      '#maxlength' => 4,
                      '#description' => 'Tell search engines when to index the page again. Very few search engines support this tag, it is more useful to use an <a href="https://www.drupal.org/project/xmlsitemap">XML Sitemap</a> file.',
                    ),
                  'period' =>
                    array(
                      '#type' => 'select',
                      '#title' => 'Revisit After interval type',
                      '#default_value' => '',
                      '#options' =>
                        array(
                          '' => '- none -',
                          'day' => 'Day(s)',
                          'week' => 'Week(s)',
                          'month' => 'Month(s)',
                          'year' => 'Year(s)',
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'revisit-after',
                    ),
                ),
              'pragma' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Pragma',
                      '#description' => 'Used to control whether a browser caches a specific page locally. Little used today. Should be used in conjunction with the Cache-Control meta tag.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'pragma',
                    ),
                ),
              'cache-control' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Cache-Control',
                      '#description' => 'Used to control whether a browser caches a specific page locally. Little used today. Should be used in conjunction with the Pragma meta tag.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'cache-control',
                    ),
                ),
              'expires' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Expires',
                      '#description' => 'Control when the browser\'s internal cache of the current page should expire. The date must to be an <a href="http://www.csgnetwork.com/timerfc1123calc.html">RFC-1123</a>-compliant date string that is represented in Greenwich Mean Time (GMT), e.g. \'Thu, 01 Sep 2016 00:12:56 GMT\'. Set to \'0\' to stop the page being cached entirely.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'expires',
                    ),
                ),
            ),
          'facebook' =>
            array(
              '#weight' => 55,
              '#type' => 'fieldset',
              '#title' => 'Facebook',
              '#description' => 'Meta tags used to integrate with Facebook\'s APIs. Most sites do not need to use these, they are primarily of benefit for sites using either the Facebook widgets, the Facebook Connect single-signon system, or are using Facebook\'s APIs in a custom way. Sites that do need these meta tags usually will only need to set them globally.',
              '#collapsible' => true,
              '#collapsed' => true,
              'fb:admins' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Admins',
                      '#description' => 'A comma-separated list of Facebook user IDs of people who are considered administrators or moderators of this page. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'fb:admins',
                    ),
                ),
              '#access' => false,
              'fb:app_id' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Application ID',
                      '#description' => 'A comma-separated list of Facebook Platform Application IDs applicable for this site.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'fb:app_id',
                    ),
                ),
              'fb:pages' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Страницы',
                      '#description' => 'Facebook Instant Articles claim URL token.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'fb:pages',
                    ),
                ),
            ),
          'google_cse' =>
            array(
              '#weight' => 80,
              '#type' => 'fieldset',
              '#title' => 'Google Custom Search Engine (CSE)',
              '#description' => 'Meta tags used to control the mobile browser experience. Some of these meta tags have been replaced by newer mobile browsers. These meta tags usually only need to be set globally, rather than per-page.',
              '#collapsible' => true,
              '#collapsed' => true,
              'thumbnail' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Thumbnail',
                      '#description' => 'Use a url of a valid image. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'thumbnail',
                    ),
                ),
              '#access' => false,
              'department' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Department',
                      '#description' => 'Department tag.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'department',
                    ),
                ),
              'audience' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Content audience',
                      '#description' => 'The content audience, e.g. "all".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'audience',
                    ),
                ),
              'doc_status' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Document status',
                      '#description' => 'The document status, e.g. "draft".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'doc_status',
                    ),
                ),
              'google_rating' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Results sorting',
                      '#description' => 'Works only with numeric values.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'google_rating',
                    ),
                ),
            ),
          'mobile' =>
            array(
              '#weight' => 80,
              '#type' => 'fieldset',
              '#title' => 'Mobile & UI Adjustments',
              '#description' => 'Meta tags used to control the mobile browser experience. Some of these meta tags have been replaced by newer mobile browsers. These meta tags usually only need to be set globally, rather than per-page.',
              '#collapsible' => true,
              '#collapsed' => true,
              'theme-color' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Theme Color',
                      '#description' => 'A color in hexidecimal format, e.g. "#0000ff" for blue; must include the "#" symbol. Used by some browsers to control the background color of the toolbar, the color used with an icon, etc.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'theme-color',
                    ),
                ),
              '#access' => false,
              'MobileOptimized' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Mobile Optimized',
                      '#description' => 'Using the value "width" tells certain mobile Internet Explorer browsers to display as-is, without being resized. Alternatively a numerical width may be used to indicate the desired page width the page should be rendered in: "240" is the suggested default, "176" for older browsers or "480" for newer devices with high DPI screens. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'MobileOptimized',
                    ),
                ),
              'HandheldFriendly' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Handheld-Friendly',
                      '#description' => 'Some older mobile browsers will expect this meta tag to be set to "true" to indicate that the site has been designed with mobile browsers in mind. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'HandheldFriendly',
                    ),
                ),
              'viewport' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Viewport',
                      '#description' => 'Used by most contemporary browsers to control the display for mobile browsers. Please read a guide on responsive web design for details of what values to use.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'viewport',
                    ),
                ),
              'cleartype' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Cleartype',
                      '#description' => 'A legacy meta tag for older versions of Internet Explorer on Windows, use the value "on" to enable it; this tag is ignored by all other browsers.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'cleartype',
                    ),
                ),
              'amphtml' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'AMP URL',
                      '#description' => 'Provides an absolute URL to an AMP-formatted version of the current page. See the <a href="https://www.ampproject.org/">official AMP specifications</a> for details on how the page should be formatted.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'amphtml',
                    ),
                ),
              'alternate_handheld' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Handheld URL',
                      '#description' => 'Provides an absolute URL to a specially formatted version of the current page designed for "feature phones", mobile phones that do not support modern browser standards. See the <a href="https://developers.google.com/webmasters/mobile-sites/mobile-seo/other-devices?hl=en#feature_phones">official Google Mobile SEO Guide</a> for details on how the page should be formatted.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'alternate_handheld',
                    ),
                ),
            ),
          'apple_mobile' =>
            array(
              '#weight' => 81,
              '#type' => 'fieldset',
              '#title' => 'Apple & iOS',
              '#description' => 'Custom meta tags used by Apple\'s software, iOS, Safari, etc.',
              '#collapsible' => true,
              '#collapsed' => true,
              'apple-itunes-app' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'iTunes App details',
                      '#description' => 'This informs iOS devices to display a banner to a specific app. If used, it must provide the "app-id" value, the "affiliate-data" and "app-argument" values are optional.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'apple-itunes-app',
                    ),
                ),
              '#access' => false,
              'apple-mobile-web-app-capable' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Web app capable?',
                      '#description' => 'If set to "yes", the application will run in full-screen mode; the default behavior is to use Safari to display web content.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'apple-mobile-web-app-capable',
                    ),
                ),
              'apple-mobile-web-app-status-bar-style' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Status bar color',
                      '#description' => 'Requires the "Web app capable" meta tag to be set to "yes". May be set to "default", "black", or "black-translucent".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'apple-mobile-web-app-status-bar-style',
                    ),
                ),
              'apple-mobile-web-app-title' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Apple Mobile Web App Title',
                      '#description' => 'Overrides the long site title when using the Apple Add to Home Screen.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'apple-mobile-web-app-title',
                    ),
                ),
              'format-detection' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Format detection',
                      '#description' => 'If set to "telephone=no" the page will not be checked for phone numbers, which would be presented.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'format-detection',
                    ),
                ),
              'ios-app-link-alternative' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'iOS app link alternative',
                      '#description' => 'A custom string for deeplinking to an iOS mobile app. Should be in the format "itunes_id/scheme/host_path", e.g. 123456/example/hello-screen". The "ios-app://" prefix will be included automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'ios-app-link-alternative',
                    ),
                ),
            ),
          'android_mobile' =>
            array(
              '#weight' => 82,
              '#type' => 'fieldset',
              '#title' => 'Android',
              '#description' => 'Custom meta tags used by the Android OS, browser, etc.',
              '#collapsible' => true,
              '#collapsed' => true,
              'android-app-link-alternative' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Android app link alternative',
                      '#description' => 'A custom string for deeplinking to an Android mobile app. Should be in the format "package_name/host_path", e.g. "com.example.android/example/hello-screen". The "android-app://" prefix will be included automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'android-app-link-alternative',
                    ),
                ),
              '#access' => false,
              'android-manifest' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Manifest',
                      '#description' => 'A URL to a manifest.json file that describes the application. The <a href="https://developer.chrome.com/multidevice/android/installtohomescreen">JSON-based manifest</a> provides developers with a centralized place to put metadata associated with a web application.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'android-manifest',
                    ),
                ),
            ),
          'windows_mobile' =>
            array(
              '#weight' => 83,
              '#type' => 'fieldset',
              '#title' => 'Windows & Windows Mobile',
              '#description' => 'Custom meta tags used by the Windows and Windows Mobile OSes, IE browser, etc.',
              '#collapsible' => true,
              '#collapsed' => true,
              'x-ua-compatible' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'X-UA-Compatible',
                      '#description' => 'Indicates to IE which rendering engine should be used for the current page.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'x-ua-compatible',
                    ),
                ),
              '#access' => false,
              'application-name' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Application name',
                      '#description' => 'The default name displayed with the pinned sites tile (or icon). Set the content attribute to the desired name.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'application-name',
                    ),
                ),
              'msapplication-allowDomainApiCalls' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Allow domain API calls',
                      '#description' => 'Allows tasks to be defined on child domains of the fully qualified domain name associated with the pinned site. Should be either "true" or "false".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-allowDomainApiCalls',
                    ),
                ),
              'msapplication-allowDomainMetaTags' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Allow domain meta tags',
                      '#description' => 'Allows tasks to be defined on child domains of the fully qualified domain name associated with the pinned site. Should be either "true" or "false".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-allowDomainMetaTags',
                    ),
                ),
              'msapplication-badge' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Badge',
                      '#description' => 'A semi-colon -separated string that must contain the "polling-uri=" value with the full URL to a <a href="http://go.microsoft.com/fwlink/p/?LinkID=314019">Badge Schema XML file</a>. May also contain "frequency=" value set to either 30, 60, 360, 720 or 1440 (default) which specifies (in minutes) how often the URL should be polled.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-badge',
                    ),
                ),
              'msapplication-config' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Config',
                      '#description' => 'Should contain the full URL to a <a href="https://msdn.microsoft.com/en-us/library/dn320426(v=vs.85).aspx">Browser configuration schema</a> file that further controls tile customizations.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-config',
                    ),
                ),
              'msapplication-navbutton-color' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Nav button color',
                      '#description' => 'Controls the color of the Back and Forward buttons in the pinned site browser window.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-navbutton-color',
                    ),
                ),
              'msapplication-notification' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Notification',
                      '#description' => 'A semi-colon -separated string containing "polling-uri=" (required), "polling-uri2=", "polling-uri3=", "polling-uri4=" and "polling-uri5=" to indicate the URLs for notifications. May also contain a "frequency=" value to specify how often (in minutes) the URLs will be polled; limited to 30, 60, 360, 720 or 1440 (default). May also contain the value "cycle=" to control the notifications cycle.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-notification',
                    ),
                ),
              'msapplication-square150x150logo' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Square logo, 150px x 150px',
                      '#description' => 'The URL to a logo file that is 150px by 150px. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-square150x150logo',
                    ),
                ),
              'msapplication-square310x310logo' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Square logo, 310px x 310px',
                      '#description' => 'The URL to a logo file that is 310px by 310px. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-square310x310logo',
                    ),
                ),
              'msapplication-square70x70logo' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Square logo, 70px x 70px',
                      '#description' => 'The URL to a logo file that is 70px by 70px. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-square70x70logo',
                    ),
                ),
              'msapplication-wide310x150logo' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Wide logo, 310px x 150px',
                      '#description' => 'The URL to a logo file that is 310px by 150px. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-wide310x150logo',
                    ),
                ),
              'msapplication-starturl' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Start URL',
                      '#description' => 'The URL to the root page of the site.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-starturl',
                    ),
                ),
              'msapplication-task' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Task',
                      '#description' => 'A semi-colon -separated string defining the "jump" list task. Should contain the "name=" value to specify the task\'s name, the "action-uri=" value to set the URL to load when the jump list is clicked, the "icon-uri=" value to set the URL to an icon file to be displayed, and "window-type=" set to either "tab" (default), "self" or "window" to control how the link opens in the browser.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-task',
                    ),
                ),
              'msapplication-task-separator' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Task separator',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-task-separator',
                    ),
                ),
              'msapplication-tilecolor' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Tile color',
                      '#description' => 'The HTML color to use as the background color for the live tile.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-tilecolor',
                    ),
                ),
              'msapplication-tileimage' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Tile image',
                      '#description' => 'The URL to an image to use as the background for the live tile. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-tileimage',
                    ),
                ),
              'msapplication-tooltip' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Tooltip',
                      '#description' => 'Controls the text shown in the tooltip for the pinned site\'s shortcut.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-tooltip',
                    ),
                ),
              'msapplication-window' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'MSApplication - Window',
                      '#description' => 'A semi-colon -separated value that controls the dimensions of the initial window. Should contain the values "width=" and "height=" to control the width and height respectively.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'msapplication-window',
                    ),
                ),
            ),
          'open-graph' =>
            array(
              '#weight' => 50,
              '#type' => 'fieldset',
              '#title' => 'Open Graph',
              '#description' => 'The <a href="http://ogp.me/">Open Graph meta tags</a> are used control how Facebook, Pinterest, LinkedIn and other social networking sites interpret the site\'s content.',
              '#collapsible' => true,
              '#collapsed' => true,
              'og:type' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'select',
                      '#options' =>
                        array(
                          'Activities' =>
                            array(
                              'activity' => 'Activity',
                              'sport' => 'Sport',
                            ),
                          'Businesses' =>
                            array(
                              'bar' => 'Bar',
                              'company' => 'Company',
                              'cafe' => 'Cafe',
                              'hotel' => 'Hotel',
                              'restaurant' => 'Restaurant',
                            ),
                          'Группы' =>
                            array(
                              'cause' => 'Cause',
                              'sports_league' => 'Sports league',
                              'sports_team' => 'Sports team',
                            ),
                          'Organizations' =>
                            array(
                              'band' => 'Band',
                              'government' => 'Government',
                              'non_profit' => 'Non-profit',
                              'school' => 'School',
                              'university' => 'University',
                            ),
                          'Пользователи' =>
                            array(
                              'actor' => 'Actor',
                              'athlete' => 'Athlete',
                              'author' => 'Автор',
                              'director' => 'Director',
                              'musician' => 'Musician',
                              'politician' => 'Politician',
                              'profile' => 'Профиль',
                              'public_figure' => 'Public figure',
                            ),
                          'Places' =>
                            array(
                              'city' => 'City',
                              'country' => 'Страна',
                              'landmark' => 'Landmark',
                              'place' => 'Place',
                              'state_province' => 'State or province',
                            ),
                          'Products and Entertainment' =>
                            array(
                              'album' => 'Album',
                              'book' => 'Книга',
                              'drink' => 'Drink',
                              'food' => 'Food',
                              'game' => 'Game',
                              'product' => 'Product',
                              'product.group' => 'Product group',
                              'song' => 'Song',
                              'video.movie' => 'Movie',
                              'video.tv_show' => 'TV show',
                              'video.episode' => 'TV show episode',
                              'video.other' => 'Miscellaneous video',
                            ),
                          'Websites' =>
                            array(
                              'website' => 'Website',
                              'article' => 'Article (inc blog)',
                            ),
                        ),
                      '#empty_option' => '- Не указано -',
                      '#title' => 'Тип материала',
                      '#description' => 'The type of the content, e.g., <em>movie</em>.',
                      '#default_value' => 'article',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => 'article',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:type',
                    ),
                ),
              '#access' => false,
              'og:url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Page URL',
                      '#description' => 'Preferred page location or URL to help eliminate duplicate content for search engines, e.g., <em>http://www.imdb.com/title/tt0117500/</em>.',
                      '#default_value' => '[current-page:url:absolute]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[current-page:url:absolute]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:url',
                    ),
                ),
              'og:title' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Content title',
                      '#description' => 'The title of the content, e.g., <em>The Rock</em>.',
                      '#default_value' => '[node:title]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:title]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:title',
                    ),
                ),
              'og:determiner' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'select',
                      '#options' =>
                        array(
                          'auto' => 'Automatic',
                          'a' => 'A',
                          'an' => 'An',
                          'the' => 'The',
                        ),
                      '#empty_option' => '- Ignore -',
                      '#title' => 'Content title determiner',
                      '#description' => 'The word that appears before the content\'s title in a sentence. The default ignores this value, the \'Automatic\' value should be sufficient if this is actually needed.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:determiner',
                    ),
                ),
              'og:description' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Content description',
                      '#description' => 'A one to two sentence description of the content.',
                      '#default_value' => '[node:summary]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:summary]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:description',
                    ),
                ),
              'og:updated_time' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Content modification date & time',
                      '#description' => 'The date this content was last modified, with an optional time value. Needs to be in <a href=\'http://en.wikipedia.org/wiki/ISO_8601\'>ISO 8601</a> format. Can be the same as the \'Article modification date\' tag.',
                      '#default_value' => '[node:changed:custom:c]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:changed:custom:c]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:updated_time',
                    ),
                ),
              'og:see_also' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'See also',
                      '#description' => 'URLs to related content. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:see_also',
                    ),
                ),
              'og:image' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Изображение',
                      '#description' => 'The URL of an image which should represent the content. The image must be at least 200 x 200 pixels in size; 600 x 316 pixels is a recommended minimum size, and for best results use an image least 1200 x 630 pixels in size. Supports PNG, JPEG and GIF formats. Should not be used if og:image:url is used. Note: if multiple images are added many services (e.g. Facebook) will default to the largest image, not specifically the first one. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image',
                    ),
                ),
              'og:image:url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Image URL',
                      '#description' => 'A alternative version of og:image and has exactly the same requirements; only one needs to be used. Note: some services do not accept this tag and will only accept the "image" tag above. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image:url',
                    ),
                ),
              'og:image:secure_url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Secure image URL',
                      '#description' => 'The secure URL (HTTPS) of an image which should represent the content. The image must be at least 50px by 50px and have a maximum aspect ratio of 3:1. Supports PNG, JPEG and GIF formats. All "http://" URLs will automatically be converted to "https://". Note: if multiple images are added many services (e.g. Facebook) will default to the largest image, not the first one. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically. This will be able to extract the URL from an image field.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image:secure_url',
                    ),
                ),
              'og:image:type' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Image type',
                      '#description' => 'The type of image referenced above. Should be either "image/gif" for a GIF image, "image/jpeg" for a JPG/JPEG image, or "image/png" for a PNG image. Note: there should be one value for each image, and having more than there are images may cause problems. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image:type',
                    ),
                ),
              'og:image:width' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Image width',
                      '#description' => 'The width of the above image(s). Note: if both the unsecured and secured images are provided, they should both be the same size. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image:width',
                    ),
                ),
              'og:image:height' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Image height',
                      '#description' => 'The height of the above image(s). Note: if both the unsecured and secured images are provided, they should both be the same size. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:image:height',
                    ),
                ),
              'og:latitude' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Latitude',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:latitude',
                    ),
                ),
              'og:longitude' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Longitude',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:longitude',
                    ),
                ),
              'og:street_address' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Street address',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:street_address',
                    ),
                ),
              'og:locality' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Locality',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:locality',
                    ),
                ),
              'og:region' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Область',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:region',
                    ),
                ),
              'og:postal_code' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Postal/ZIP code',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:postal_code',
                    ),
                ),
              'og:country_name' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Country name',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:country_name',
                    ),
                ),
              'og:email' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Email',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:email',
                    ),
                ),
              'og:phone_number' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Phone number',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:phone_number',
                    ),
                ),
              'og:fax_number' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Fax number',
                      '#description' => '',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:fax_number',
                    ),
                ),
              'og:locale' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Язык',
                      '#description' => 'The locale these tags are marked up in, must be in the format language_TERRITORY. Default is en_US. This will not be displayed if it is set to the "Language neutral" (i.e. "und").',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:locale',
                    ),
                ),
              'og:locale:alternate' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Alternative locales',
                      '#description' => 'Other locales this content is available in, must be in the format language_TERRITORY, e.g. "fr_FR". Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically. This will not be displayed if it is set to the "Language neutral" (i.e. "und").',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:locale:alternate',
                    ),
                ),
              'article:author' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article author',
                      '#description' => 'Links an article to an author\'s Facebook profile, should be either URLs to the author\'s profile page or their Facebook profile IDs. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:author',
                    ),
                ),
              'article:publisher' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article publisher',
                      '#description' => 'Links an article to a publisher\'s Facebook page.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:publisher',
                    ),
                ),
              'article:section' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article section',
                      '#description' => 'The primary section of this website the content belongs to.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:section',
                    ),
                ),
              'article:tag' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article tag(s)',
                      '#description' => 'Appropriate keywords for this content. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:tag',
                    ),
                ),
              'article:published_time' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article publication date & time',
                      '#description' => 'The date this content was published on, with an optional time value. Needs to be in <a href=\'http://en.wikipedia.org/wiki/ISO_8601\'>ISO 8601</a> format.',
                      '#default_value' => '[node:created:custom:c]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:created:custom:c]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:published_time',
                    ),
                ),
              'article:modified_time' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article modification date & time',
                      '#description' => 'The date this content was last modified, with an optional time value. Needs to be in <a href=\'http://en.wikipedia.org/wiki/ISO_8601\'>ISO 8601</a> format.',
                      '#default_value' => '[node:changed:custom:c]',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  'default' =>
                    array(
                      '#type' => 'hidden',
                      '#value' => '[node:changed:custom:c]',
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:modified_time',
                    ),
                ),
              'article:expiration_time' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Article expiration date & time',
                      '#description' => 'The date this content will expire, with an optional time value. Needs to be in <a href=\'http://en.wikipedia.org/wiki/ISO_8601\'>ISO 8601</a> format.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'article',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'article:expiration_time',
                    ),
                ),
              'profile:first_name' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'First name',
                      '#description' => 'The first name of the person who\'s Profile page this is.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'profile',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'profile:first_name',
                    ),
                ),
              'profile:last_name' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Last name',
                      '#description' => 'The person\'s last name.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'profile',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'profile:last_name',
                    ),
                ),
              'profile:username' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Имя пользователя',
                      '#description' => 'A pseudonym / alias of this person.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'profile',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'profile:username',
                    ),
                ),
              'profile:gender' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Gender',
                      '#description' => 'Any of Facebook\'s gender values should be allowed, the initial two being \'male\' and \'female\'.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'profile',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'profile:gender',
                    ),
                ),
              'og:audio' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Audio URL',
                      '#description' => 'The URL to an audio file that complements this object.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:audio',
                    ),
                ),
              'og:audio:secure_url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Audio secure URL',
                      '#description' => 'The secure URL to an audio file that complements this object. All "http://" URLs will automatically be converted to "https://".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:audio:secure_url',
                    ),
                ),
              'og:audio:type' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Audio type',
                      '#description' => 'The MIME type of the audio file. Examples include "application/mp3" for an MP3 file.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:audio:type',
                    ),
                ),
              'book:author' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Book\'s author',
                      '#description' => 'Links to the book\'s author\'s Facebook profile, should be either URLs to the author\'s profile page or their Facebook profile IDs. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'book',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'book:author',
                    ),
                ),
              'book:isbn' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Book\'s ISBN',
                      '#description' => 'The book\'s <a href="http://en.wikipedia.org/wiki/International_Standard_Book_Number">International Standard Book Number</a>, which may be in one of several formats.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'book',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'book:isbn',
                    ),
                ),
              'book:release_date' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Book release date',
                      '#description' => 'The date this content will expire, with an optional time value. Needs to be in <a href=\'http://en.wikipedia.org/wiki/ISO_8601\'>ISO 8601</a> format.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'book',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'book:release_date',
                    ),
                ),
              'book:tag' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Book tags',
                      '#description' => 'Appropriate keywords for this book. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'book',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'book:tag',
                    ),
                ),
              'og:video:url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video URL',
                      '#description' => 'The URL to a video file that complements this object.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:video:url',
                    ),
                ),
              'og:video:secure_url' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video secure URL',
                      '#description' => 'A URL to a video file that complements this object using the HTTPS protocol. All "http://" URLs will automatically be converted to "https://".',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:video:secure_url',
                    ),
                ),
              'og:video:width' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video width',
                      '#description' => 'The width of the video.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:video:width',
                    ),
                ),
              'og:video:height' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video height',
                      '#description' => 'The height of the video.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:video:height',
                    ),
                ),
              'og:video:type' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video type',
                      '#description' => 'The MIME type of the video file. Examples include "application/x-shockwave-flash" for a Flash video, or "text/html" if this is a standalone web page containing a video.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'og:video:type',
                    ),
                ),
              'video:actor' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Actor(s)',
                      '#description' => 'Links to the Facebook profiles for actor(s) that appear in the video. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:actor',
                    ),
                ),
              'video:actor:role' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Actors\' role',
                      '#description' => 'The roles of the actor(s). Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:actor:role',
                    ),
                ),
              'video:director' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Director(s)',
                      '#description' => 'Links to the Facebook profiles for director(s) that worked on the video.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:director',
                    ),
                ),
              'video:writer' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Scriptwriter(s)',
                      '#description' => 'Links to the Facebook profiles for scriptwriter(s) for the video. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:writer',
                    ),
                ),
              'video:duration' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Video duration (seconds)',
                      '#description' => 'The length of the video in seconds',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:duration',
                    ),
                ),
              'video:release_date' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Release date',
                      '#description' => 'The date the video was released.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:release_date',
                    ),
                ),
              'video:tag' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Tag',
                      '#description' => 'Tag words associated with this video. Multiple values may be used, separated by a comma. Note: Tokens that return multiple values will be handled automatically.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:tag',
                    ),
                ),
              'video:series' =>
                array(
                  'value' =>
                    array(
                      '#type' => 'textfield',
                      '#title' => 'Series',
                      '#description' => 'The TV show this series belongs to.',
                      '#default_value' => '',
                      '#element_validate' =>
                        array(
                          0 => 'token_element_validate',
                        ),
                      '#token_types' =>
                        array(
                          0 => 'node',
                        ),
                      '#maxlength' => 1024,
                      '#states' =>
                        array(
                          'visible' =>
                            array(
                              ':input[name*="[og:type][value]"]' =>
                                array(
                                  'value' => 'video.episode',
                                ),
                            ),
                        ),
                    ),
                  '#access' => false,
                  '#parents' =>
                    array(
                      0 => 'metatags',
                      1 => 'und',
                      2 => 'video:series',
                    ),
                ),
            ),
        ),
      'intro_text' =>
        array(
          '#markup' => '<p>Configure the meta tags below. Tokens, e.g. "[node:summary]", automatically insert the corresponding information from that field or value, which helps to avoid redundant meta data and possible search engine penalization; see the "Browse available tokens" popup for more details.</p>',
          '#weight' => -10,
        ),
      '#group' => 'additional_settings',
      '#attached' =>
        array(
          'js' =>
            array(
              'vertical-tabs' => 'sites/all/modules/metatag/metatag.vertical-tabs.js',
            ),
        ),
    ),
  'path' =>
    array(
      '#type' => 'fieldset',
      '#title' => 'Настройки адресов',
      '#collapsible' => true,
      '#collapsed' => true,
      '#group' => 'additional_settings',
      '#attributes' =>
        array(
          'class' =>
            array(
              0 => 'path-form',
            ),
        ),
      '#attached' =>
        array(
          'js' =>
            array(
              0 => 'modules/path/path.js',
            ),
        ),
      '#access' => false,
      '#weight' => 30,
      '#tree' => true,
      '#element_validate' =>
        array(
          0 => 'path_form_element_validate',
        ),
      'alias' =>
        array(
          '#type' => 'textfield',
          '#title' => 'Синоним URL',
          '#default_value' => '',
          '#maxlength' => 255,
          '#description' => 'Дополнительно указать альтернативный URL, через который может быть доступен данный материал. Например, введите "about" при написании страницы "О проекте". Используйте относительный путь и не добавляйте косую черту в конце, иначе URL-синоним не будет работать.',
        ),
      'pid' =>
        array(
          '#type' => 'value',
          '#value' => NULL,
        ),
      'source' =>
        array(
          '#type' => 'value',
          '#value' => NULL,
        ),
      'language' =>
        array(
          '#type' => 'value',
          '#value' => 'und',
        ),
    ),
);
