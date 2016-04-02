<?php

Admin::model(Nneed\Products\Models\PrsoCategory::class)->title('��������� �������')->display(function ()
{
	$display = AdminDisplay::tree();
	$display->value('name');
	return $display;

})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', '��������'),
		FormItem::text('slug', '�����'),
                FormItem::checkbox('showtop', '������� ����')->defaultValue(true),
                FormItem::checkbox('showside', '������� ����')->defaultValue(true),
                FormItem::checkbox('showbottom', '���� �������')->defaultValue(true),
                FormItem::checkbox('showcontent', '� ������ ���������')->defaultValue(true),
		FormItem::ckeditor('note', '���������'),
		FormItem::ckeditor('desc', '��������'),
	]);
	return $form;
});