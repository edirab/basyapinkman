# Generated by Django 2.1.3 on 2018-11-23 17:18

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('poetry', '0007_auto_20181122_2153'),
    ]

    operations = [
        migrations.CreateModel(
            name='sideBarInfo',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('text', models.CharField(max_length=512)),
                ('link', models.CharField(max_length=512)),
            ],
        ),
    ]