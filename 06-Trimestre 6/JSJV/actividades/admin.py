from django.contrib import admin
from .models import Novelty,StateAc,Activity

#admin.site.register(Novelty)
#admin.site.register(StateAc)
#admin.site.register(Activity)
@admin.register(Novelty)
class NoveltyAdmin(admin.ModelAdmin):
    list_display = ('dateN',)
    


@admin.register(StateAc)
class StateAcAdmin(admin.ModelAdmin):
   list_display = ('stateAc',)
  



@admin.register(Activity)
class ActivityAdmin(admin.ModelAdmin):
    list_display = ('dateAc', 'timeAc','noveltyAc','stateAc',)
    list_display_links=('dateAc',)
    list_editable=('timeAc',)
    search_fields=('dateAc',)
    list_filter=('noveltyAc','stateAc',)
    list_per_page=2