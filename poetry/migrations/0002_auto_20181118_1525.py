# Generated by Django 2.1.3 on 2018-11-18 12:25

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('poetry', '0001_initial'),
    ]

    operations = [
        migrations.RenameField(
            model_name='poem',
            old_name='image',
            new_name='image_name',
        ),
    ]
