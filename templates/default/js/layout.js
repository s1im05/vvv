import hljs from '../../../node_modules/highlightjs/highlight.pack.js';

(($, w, u) => {
	
	const textureSize = 210,
		icons = {
			games: ['\uf1e3', '\uf11b', '\uf091', '\uf1e2', '\uf1b9'],
			work: ['\uf0ac', '\uf19d', '\uf0c3', '\uf0b1', '\uf1ec'],
			travel: ['\uf206', '\uf083', '\uf207', '\uf072', '\uf1ba', '\uf0f2'],
		},
		genereateTexture = (size, icons) => {
			const el = document.createElement('canvas'),
				ctx = el.getContext("2d"),
				offsetY = 75;
				
			icons.sort((a, b) => {
				return Math.random() > 0.5 ? 1 : -1;
			});
		
			el.width = size * 2;
			el.height = size;
			
			ctx.fillStyle = "rgba(256, 256, 256, .3)";
			ctx.font = "8em FontAwesome";
			ctx.fillText(icons[0], 0, offsetY);
			ctx.fillText(icons[1], size, offsetY);
			ctx.fillText(icons[2], 0.5 * size, 0.5 * size + offsetY);
			ctx.fillText(icons[3], 1.5 * size, 0.5 * size + offsetY);
			
			return el.toDataURL('image/png');
		};
	
	$(() => { // on document ready
		/* nav */
		$('#navBtn').on('click', e => {
			$('#navMenu').toggle();
		})
		.on('blur', e => {
			w.setTimeout(() => {
				$('#navMenu').hide();
			}, 200);
		});
		
		/* obs */
		$('#obs').on('click', e => {
			$('#modalObs input, #modalObs textarea').val([]);
			$('#modalBackdrop').removeClass('hidden');
			$('#modalObs').show();
		});
		$('#modalObs').on('click closeModal', '.modal-close', function(e) {
			$('#modalBackdrop').addClass('hidden');
			$('#modalObs').hide();
		});
		$('#obsSend').on('click', function(e) {
			let data = {};
			$('#modalObs input, #modalObs textarea').each(function(i) {
				data[$(this).attr('name')] = $(this).val();
			});
			$(this).prop('disabled', true);
			$.post('/ajax/obs', data, res => {
				$(this).hide();
				$('#modalObs .modal-body').html('<p class="text-success">Успешно отправлено</p>');
				w.setTimeout(() => {
					$(this).show().prop('disabled', false);
					$('#modalObs .modal-close:first').trigger('closeModal');
				}, 3000);				
			});
		});

		/* search */
		$('#search, #searchXs').on('keypress', function(e) {
			if (e.keyCode === 13) {
				w.location.href = `/search/${w.encodeURIComponent($(this).val() + '')}`;
			}
		});
		
		let iconSet;
		switch ($('body').data('chapter')) {
			case 'work':
				iconSet = icons.work;
				break;
			case 'travel':
				iconSet = icons.travel;
				break;
			case 'games':
				iconSet = icons.games;
				break;
			default:
				iconSet = [];
				iconSet.push(...icons.work, ...icons.travel, ...icons.games);
		}

		$('#jumbo').css('background-image', 'url(' + genereateTexture(textureSize, iconSet) + ')');
		
		$('article').on('click', '.admin-tag-add', function(e) {
			const articleId = $(this).closest('article').data('id'),
				tag = window.prompt();

			if (tag) {
				$.post('/ajax/admin/tags', {'articleId': articleId, 'tag': tag, 'action': 'add'}, function(res) {
					w.location.reload();
				});
			}
		}).on('click', '.admin-tag-remove', function(e) {
			const articleId = $(this).closest('article').data('id'),
				tagId = $(this).data('tag-id');
				
			$.post('/ajax/admin/tags', {'articleId': articleId, 'tagId': tagId, 'action': 'remove'}, function(res) {
				w.location.reload();
			});
		});
		
		$('.c-comment').on('click', '.admin-comment', function(e) {
			const commentId = $(this).closest('.c-comment').data('id'),
				state = $(this).data('state');
				
			$.post('/ajax/admin/comment', {'commentId': commentId, 'state': state}, function(res) {
				w.location.reload();
			});
		});
		
		$('article code').each(function(i, block) {
			hljs.highlightBlock(block);
		});
	});	
})(jQuery, window);