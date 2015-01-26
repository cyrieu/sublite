<style>
	.block {
		<?php cssCross('box-shadow: 0px 0px 5px rgba(0,0,0,.2);'); ?>
		<?php cssCross('box-sizing: border-box;'); ?>
		width: 50em;
		max-width: 100%;
		height: 20em;
		display: inline-block;
		background: #fff no-repeat center center;
		background-size: cover;
		position: relative;
		text-align: left;
		<?php cssCross('transition: 0.1s all ease-in-out;'); ?>
		cursor: pointer;
		margin: 0.5em 0;
		color: #111;
	}
	.block:hover {
		opacity: 0.7;
	}
	.block .info {
		position: absolute;
		bottom: 0;
		background: #fefafa;
		padding: 1em;
		width: 100%;
		<?php cssCross('box-sizing: border-box;'); ?>
		line-height: 2em;
	}
	.block .title {
		display: inline-block;
		font-size: 1.4em;
	}
	.block .subtitle {
		display: inline-block;
		font-size: 0.8em;
		color: #999;
	}
	.block .data {
		display: inline-block;
		float: right;
		max-width: 100%;
	}
	.block .price {
		display: inline-block;
		font-size: 2em;
		font-weight: bolder;
	}
	.block .proximity {
		display: inline-block;
		font-size: 1.5em;
	}
</style>