<?php

use TallStackUi\View\Personalizations\Components\Alert;
use TallStackUi\View\Personalizations\Components\Avatar;
use TallStackUi\View\Personalizations\Components\Badge;
use TallStackUi\View\Personalizations\Components\Button\Button;
use TallStackUi\View\Personalizations\Components\Button\Circle;
use TallStackUi\View\Personalizations\Components\Card;
use TallStackUi\View\Personalizations\Components\Dropdown\Dropdown;
use TallStackUi\View\Personalizations\Components\Error;
use TallStackUi\View\Personalizations\Components\Errors;
use TallStackUi\View\Personalizations\Components\Form\Checkbox;
use TallStackUi\View\Personalizations\Components\Form\Input;
use TallStackUi\View\Personalizations\Components\Form\Label;
use TallStackUi\View\Personalizations\Components\Form\Password;
use TallStackUi\View\Personalizations\Components\Form\Radio;
use TallStackUi\View\Personalizations\Components\Form\Textarea;
use TallStackUi\View\Personalizations\Components\Form\Toggle;
use TallStackUi\View\Personalizations\Components\Hint;
use TallStackUi\View\Personalizations\Components\Interactions\Dialog;
use TallStackUi\View\Personalizations\Components\Interactions\Toast;
use TallStackUi\View\Personalizations\Components\Modal;
use TallStackUi\View\Personalizations\Components\Select\Native;
use TallStackUi\View\Personalizations\Components\Select\Styled;
use TallStackUi\View\Personalizations\Components\Tabs\Items as TabItem;
use TallStackUi\View\Personalizations\Components\Tabs\Tab as TabWrapper;
use TallStackUi\View\Personalizations\Components\Tooltip;
use TallStackUi\View\Personalizations\Components\Wrapper\Input as InputWrapper;
use TallStackUi\View\Personalizations\Components\Wrapper\Radio as RadioWrapper;

dataset('personalizations.keys', [
    'tallstack-ui::personalizations.alert',
    'tallstack-ui::personalizations.avatar',
    'tallstack-ui::personalizations.badge',
    'tallstack-ui::personalizations.button',
    'tallstack-ui::personalizations.button.circle',
    'tallstack-ui::personalizations.card',
    'tallstack-ui::personalizations.dialog',
    'tallstack-ui::personalizations.dropdown',
    'tallstack-ui::personalizations.dropdown.items',
    'tallstack-ui::personalizations.errors',
    'tallstack-ui::personalizations.form.error',
    'tallstack-ui::personalizations.form.input',
    'tallstack-ui::personalizations.form.hint',
    'tallstack-ui::personalizations.form.label',
    'tallstack-ui::personalizations.form.password',
    'tallstack-ui::personalizations.form.checkbox',
    'tallstack-ui::personalizations.form.radio',
    'tallstack-ui::personalizations.form.textarea',
    'tallstack-ui::personalizations.form.toggle',
    'tallstack-ui::personalizations.modal',
    'tallstack-ui::personalizations.select.native',
    'tallstack-ui::personalizations.select.styled',
    'tallstack-ui::personalizations.tab',
    'tallstack-ui::personalizations.tab.items',
    'tallstack-ui::personalizations.toast',
    'tallstack-ui::personalizations.tooltip',
    'tallstack-ui::personalizations.wrapper.input',
    'tallstack-ui::personalizations.wrapper.radio',
]);

dataset('personalizations.classes', [
    Alert::class,
    Avatar::class,
    Badge::class,
    Button::class,
    Circle::class,
    Card::class,
    Dialog::class,
    Dropdown::class,
    Error::class,
    Errors::class,
    Input::class,
    Label::class,
    Password::class,
    Checkbox::class,
    Radio::class,
    Textarea::class,
    Toggle::class,
    Hint::class,
    Modal::class,
    Native::class,
    Styled::class,
    TabWrapper::class,
    TabItem::class,
    Toast::class,
    Tooltip::class,
    InputWrapper::class,
    RadioWrapper::class,
]);

dataset('components', [
    TallStackUi\View\Components\Form\Input::class,
    TallStackUi\View\Components\Form\Textarea::class,
    TallStackUi\View\Components\Form\Password::class,
    TallStackUi\View\Components\Form\Toggle::class,
    TallStackUi\View\Components\Form\Radio::class,
    TallStackUi\View\Components\Form\Checkbox::class,
    TallStackUi\View\Components\Form\Label::class,
    TallStackUi\View\Components\Alert::class,
    TallStackUi\View\Components\Card::class,
    TallStackUi\View\Components\Dropdown\Dropdown::class,
    TallStackUi\View\Components\Dropdown\Items::class,
    TallStackUi\View\Components\Badge::class,
    \TallStackUi\View\Components\Avatar::class,
    \TallStackUi\View\Components\Form\Hint::class,
    \TallStackUi\View\Components\Form\Error::class,
    TallStackUi\View\Components\Errors::class,
    TallStackUi\View\Components\Tab\Tab::class,
    TallStackUi\View\Components\Tab\Items::class,
    TallStackUi\View\Components\Tooltip::class,
    TallStackUi\View\Components\Button\Button::class,
    TallStackUi\View\Components\Button\Circle::class,
    TallStackUi\View\Components\Select\Native::class,
    TallStackUi\View\Components\Select\Styled::class,
    TallStackUi\View\Components\Modal::class,
    TallStackUi\View\Components\Interaction\Toast::class,
    TallStackUi\View\Components\Interaction\Dialog::class,
    TallStackUi\View\Components\Wrapper\Input::class,
    TallStackUi\View\Components\Wrapper\Radio::class,
]);
