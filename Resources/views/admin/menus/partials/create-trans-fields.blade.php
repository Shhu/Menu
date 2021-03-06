<div class='form-group{{ $errors->has("{$lang}[title]") ? ' has-error' : '' }}'>
    {!! Form::label("{$lang}[title]", trans('menu::menu.form.title')) !!}
    {!! Form::text("{$lang}[title]", Input::old("{$lang}[title]"), ['class' => 'form-control', 'placeholder' => trans('menu::menu.form.title')]) !!}
    {!! $errors->first("{$lang}[title]", '<span class="help-block">:message</span>') !!}
</div>
<div class="checkbox">
    <label for="{{$lang}}[status]">
        <input id="{{$lang}}[status]"
                name="{{$lang}}[status]"
                type="checkbox"
                class="flat-blue"

                value="1" />
        {{ trans('menu::menu.form.status') }}
    </label>
</div>
