<?php $this->widget('zii.widgets.CListView', array(
	'summaryText'=>'',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_printall',
	'enablePagination' => false,
	)); ?>