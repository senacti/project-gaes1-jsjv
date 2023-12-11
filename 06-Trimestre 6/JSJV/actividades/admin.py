from django.contrib import admin
from .models import Novelty,StateAc,Activity
from import_export import resources
from django.urls import reverse
from import_export.admin import ImportExportModelAdmin
from django.shortcuts import redirect

#admin.site.register(Novelty)
#admin.site.register(StateAc)
#admin.site.register(Activity)
@admin.register(Novelty)
class NoveltyAdmin(ImportExportModelAdmin):
    list_display = ('dateN',)
    


@admin.register(StateAc)
class StateAcAdmin(ImportExportModelAdmin):
   list_display = ('stateAc',)
  



@admin.register(Activity)
class ActivityAdmin(ImportExportModelAdmin):
    list_display = ('dateAc', 'timeAc','noveltyAc','stateAc',)
    list_display_links=('dateAc',)
    list_editable=('timeAc',)
    search_fields=('dateAc',)
    list_filter=('noveltyAc','stateAc',)
    list_per_page=5

    actions = ['custom_button']

    def custom_button(self, request, queryset):

        url = reverse('pdfActi')
        return redirect(url)

    custom_button.short_description = 'Descargar PDF'