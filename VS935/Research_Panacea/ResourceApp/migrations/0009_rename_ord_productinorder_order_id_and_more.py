# Generated by Django 4.0.6 on 2022-08-20 12:42

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('Institutes', '0011_remove_labs_lab_staff_remove_labs_resource_id_and_more'),
        ('ResourceApp', '0008_transaction_is_paid'),
    ]

    operations = [
        migrations.RenameField(
            model_name='productinorder',
            old_name='ord',
            new_name='order_id',
        ),
        migrations.RemoveField(
            model_name='order',
            name='order_items',
        ),
        migrations.RemoveField(
            model_name='transaction',
            name='order_items',
        ),
        migrations.AddField(
            model_name='order',
            name='workforce',
            field=models.ForeignKey(default=1, on_delete=django.db.models.deletion.DO_NOTHING, to='Institutes.workforce'),
            preserve_default=False,
        ),
    ]
