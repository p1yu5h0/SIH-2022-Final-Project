# Generated by Django 4.0.6 on 2022-08-05 20:42

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('rest_api', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='UserCourses1',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('college_name', models.CharField(blank=True, max_length=255, null=True)),
                ('user_id', models.CharField(blank=True, max_length=255, null=True)),
                ('domain_code', models.CharField(blank=True, max_length=255, null=True)),
                ('resource_name', models.CharField(blank=True, max_length=255, null=True)),
                ('price_paid', models.CharField(blank=True, max_length=255, null=True)),
            ],
        ),
    ]
