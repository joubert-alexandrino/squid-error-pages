<html>
	<head>
		<title>squidGuard Error page</title>
	</head>
	<body>
	<?php if ($config['installedpackages']['squidguarddefault']['config'][0]['deniedmessage']): ?>
		<h3><?= $config['installedpackages']['squidguarddefault']['config'][0]['deniedmessage'] ?>: <?= htmlspecialchars($err_code[$er_code_id]) ?></h3>;
	<?php else: ?>
		<h3>Request denied by <?= $g['product_name'] ?> proxy: <?= htmlspecialchars($err_code[$er_code_id]) ?></h3>
	<?php endif; ?>

	<?php if ($err_msg): ?>
		<b>Reason:</b> <?= htmlspecialchars($err_msg) ?>
	<?php endif; ?>

		<hr size="1" noshade>
	<?php if ($cl['a']): ?>
		<b> Client address: </b> <?= htmlspecialchars($cl['a']) ?><br/>
	<?php endif; ?>

	<?php if ($cl['n']): ?>
		<b> Client name:    </b> <?= htmlspecialchars($cl['n']) ?><br/>
	<?php endif; ?>

	<?php if ($cl['i']): ?>
		<b> Client user:    </b> <?= htmlspecialchars($cl['i']) ?><br/>
	<?php endif; ?>

	<?php if ($cl['s']): ?>
		<b> Client group:   </b> <?= htmlspecialchars($cl['s']) ?><br/>
	<?php endif; ?>

	<?php if ($cl['t']): ?>
		<b> Target group:   </b> <?= htmlspecialchars($cl['t']) ?><br/>
	<?php endif; ?>

	<?php if ($cl['u']): ?>
		<b> URL:            </b> <?= htmlspecialchars($cl['u']) ?><br/>
	<?php endif; ?>

		<hr size="1" noshade>
	</body>
</html>