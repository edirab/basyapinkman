# Generated by Django 2.2 on 2019-10-17 18:34

import datetime
from django.db import migrations, models
from django.utils.timezone import utc


class Migration(migrations.Migration):

    dependencies = [
        ('poetry', '0019_auto_20191017_2113'),
    ]

    operations = [
        migrations.AlterField(
            model_name='youtubevideo',
            name='description',
            field=models.TextField(default=None),
        ),
    ]
