<?php
/*
Template Name: Control Panel Wire Harness
*/
get_header(); // Include the header
?>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap');
	
	/* Common Style */
	.section-title {
		margin-bottom: 40px;
	}
	.section-title h2 {
		font-family: Alexandria;
		font-size: 48px;
		line-height: 1;
		font-weight: 400;
		color: #161616;
		text-align: center;
	}

	@media only screen and (max-width: 1024px) {
		.section-title h2 {
			font-size: 32px;
		}
	}
	
	/* Hero Area */
	.hero-area {
		padding: 69px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
		background-repeat: no-repeat !important;
		background-position: right center !important;
		background-size: cover !important;
	}
	.hero-area .hero-container {
		max-width: 1480px;
	}
	.hero-area .hero-content-wrapper {
		max-width: 700px;
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: 20px;
	}
	.hero-area .hero-content-wrapper .hero-sub-title {
		font-family: Alexandria;
		font-size: 32px;
		font-weight: 500;
		line-height: 44px;
		color: #242424;
	}
	.hero-area .hero-content-wrapper .hero-title {
		font-family: Alexandria;
		font-size: 68px;
		font-weight: 600;
		line-height: initial;
		color: #16529B;
	}
	.hero-area .hero-content-wrapper .hero-desc {
		font-family: Alexandria;
		font-size: 20px;
		font-weight: 300;
		line-height: 34px;
		color: #242424;
		margin-top: 20px;
	}
	.hero-area .hero-content-wrapper .hero-btn-wrapper {
		display: flex;
		margin-top: 20px;
	}
/* 	.hero-area .hero-image {
		display: none;
		width: 100%;
		margin-top: 24px;
	}
	.hero-area .hero-image img {
		width: 100%;
		
	} */

	@media only screen and (max-width: 1024px) {
		.hero-area {
			padding: 50px 16px;
		}
		.hero-area .hero-content-wrapper .hero-sub-title {
			font-size: 28px;
			line-height: 35px;
		}
		.hero-area .hero-content-wrapper .hero-title {
			font-size: 72px;
		}
		.hero-area .hero-content-wrapper .hero-desc {
			font-size: 18px;
			line-height: 30px;
			margin-top: 0;
		}
		.hero-area {
			background-position: 70% center !important;
		}
	}
	@media only screen and (max-width: 767px) {
		.hero-area {
			padding: 20px 16px;
		}
		.hero-area .hero-content-wrapper .hero-sub-title {
			font-size: 18px;
			line-height: 24px;
		}
		.hero-area .hero-content-wrapper .hero-title {
			font-size: 32px;
		}
		.hero-area .hero-content-wrapper .hero-desc {
			font-size: 16px;
			line-height: 24px;
			display: none;
		}
		.hero-area {
			background-position: 75% center !important;
		}
		.hero-area .hero-content-wrapper .hero-btn-wrapper {
			margin-top: 0;
		}
		.hero-area .hero-content-wrapper .hero-btn-wrapper .popup-form-btn {
			font-size: 16px;
			padding: 10px 16px;
		}
/* 		.hero-area .hero-image {
			display: flex;
		} */
	}

	/* About Section */
	.about-area {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
	}
	.about-area .about-wrapper {
		display: flex;
		align-items: flex-start;
		gap: 20px;
	}
	.about-area .about-content-wrapper {
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: 24px;
	}
	.about-area .about-content-wrapper .popup-form-btn {
		width: fit-content;
		margin-top: 16px;
		padding: 14px 30px;
		font-size: 16px;
		font-weight: 400;
		line-height: initial;
	}
	.about-area .about-content-wrapper p {
		font-size: 16px;
		font-weight: 300;
		font-family: Alexandria;
		line-height: 24px;
		color: #262626;
	}
	.about-area .about-image-wrapper {
		display: flex;
		width: 100%;
	}
	.about-area .about-image-wrapper .image {
		display: flex;
		width: 100%;
		aspect-ratio: 5.8/4.5;
		border-radius: 12px;
		overflow: hidden;
	}
	.about-area .about-image-wrapper .image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	@media only screen and (max-width: 767px) {
		.about-area {
			padding: 70px 0;
		}
		.about-area .about-wrapper {
			flex-direction: column-reverse;
		}
		.about-area .about-image-wrapper {
			grid-template-rows: 160px 160px;
		}
		.about-area .about-content-wrapper .popup-form-btn {
			margin-top: 0;
			padding: 10px 16px;
		}
	}

	
	/* Why Choose Section */
	.why-choose-section {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
		background-color: #F0F0F0;
	}
	.why-choose-section .info-card-wrapper {
		display: flex;
		gap: 20px;
	}
	.info-card-wrapper .info-card {
		display: flex;
		flex-direction: column;
		gap: 32px;
		align-items: center;
		width: 100%;
	}
	.info-card-wrapper .info-card .info-card-image {
		display: flex;
		flex-shrink: 0;
		width: 215px;
		height: 215px;
		border-radius: 50%;
		overflow: hidden;
	}
	.info-card-wrapper .info-card .info-card-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.info-card-wrapper .info-card .info-card-content-wrapper {
		display: flex;
		flex-direction: column;
		gap: 24px;
		padding: 20px 24px;
		background-color: #FFF;
		border-radius: 12px;
		box-shadow: 0px 0px 8px 0px #00000014;
		height: 100%;
	}
	.info-card-wrapper .info-card .info-card-content-wrapper .info-card-title {
		font-family: Alexandria;
		font-size: 32px;
		line-height: initial;
		font-weight: 500;
		color: #161616;
	}
	.info-card-wrapper .info-card .info-card-content-wrapper .info-card-desc {
		font-family: Alexandria;
		font-size: 16px;
		line-height: 24px;
		font-weight: 300;
		text-align: justify;
		color: #161616;
	}

	@media only screen and (max-width: 1024px) {
		.why-choose-section .info-card-wrapper {
			flex-wrap: wrap;
			gap: 32px;
		}
	}
	@media only screen and (max-width: 767px) {
		.why-choose-section {
			padding: 70px 0;
		}
	}

	
	/* our-custom-cable-area */
	.our-custom-cable-area {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
	}
	.our-custom-cable-area .image-card-wrapper {
		display: flex;
		flex-direction: column;
		gap: 24px;
	}
	.our-custom-cable-area .image-card-wrapper .image-card {
		display: flex;
		align-items: center;
		gap: 130px;
		width: 100%;
		padding: 20px;
		box-shadow: 0px 0px 8px 0px #0000001A;
		border-radius: 12px;
	}
	.our-custom-cable-area .image-card-wrapper .image-card:nth-child(2) {
		justify-content: flex-end;
	}
	.our-custom-cable-area .image-card-wrapper .image-card .image-card-image {
		display: flex;
		flex-shrink: 0;
		width: 240px;
		height: 240px;
		border-radius: 50%;
		overflow: hidden;
	}
	.our-custom-cable-area .image-card-wrapper .image-card .image-card-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.image-card-wrapper .image-card .image-card-content-wrapper {
		max-width: 580px;
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: 24px;
	}
	.image-card-wrapper .image-card .image-card-content-wrapper .image-card-title {
		font-family: Alexandria;
		font-size: 24px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
	}
	.our-custom-cable-area .image-card-wrapper .image-card .image-card-content-wrapper .image-card-desc {
		font-family: Alexandria;
		font-size: 16px;
		line-height: 24px;
		font-weight: 300;
		text-align: justify;
		color: #161616;
	}

	@media only screen and (max-width: 1024px) {
		.our-custom-cable-area .image-card-wrapper .image-card {
			gap: 50px;
		}
		.our-custom-cable-area .image-card-wrapper .image-card .image-card-content-wrapper {
			gap: 12px;
		}
	}
	@media only screen and (max-width: 767px) {
		.our-custom-cable-area {
			padding: 70px 0;
			max-width: 1920px;
			overflow: hidden;
		}
		.our-custom-cable-area .image-card-wrapper .image-card {
			flex-direction: column;
		}
		.our-custom-cable-area .image-card-wrapper .image-card:first-child,
		.our-custom-cable-area .image-card-wrapper .image-card:last-child {
			flex-direction: column-reverse;
		}
	}
	
	/* Technical Details section */
	.technical-details-area {
		padding: 70px 16px;
		max-width: 1920px;
		overflow: hidden;
		background-color: #F0F0F0;
	}
	.technical-details-area .feature-list-main-wrapper {
		display: flex;
		align-items: flex-start;
		gap: 20px;
	}
	.technical-details-area .feature-list-main-wrapper .feature-list-card-wrapper {
		display: flex;
		flex-direction: column;
		gap: 20px;
		width: 100%;
		height: 100%;
	}
	.technical-details-area .feature-list-btn-wrapper {
		display: flex;
		margin-top: 20px;
	}
	.technical-details-area .feature-list-btn-wrapper .popup-form-btn {
		padding: 14px 30px;
		font-size: 16px;
		font-weight: 400;
		line-height: initial;
	}
	.technical-details-area .feature-list-main-wrapper .feature-list-card-wrapper .feature-list-card {
		display: flex;
		align-items: center;
		gap: 16px;
		background-color: #FFF;
		padding: 16px 20px;
		border: 0.5px solid #00BDE7;
		border-radius: 12px;
		min-height: 80px;
	}
	.technical-details-area .feature-list-main-wrapper .feature-list-card .feature-list-title {
		width: 100%;
		font-family: Alexandria;
		font-size: 20px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
	}
	.technical-details-area .feature-list-main-wrapper .feature-list-card .feature-list-desc {
		width: 372px;
		flex-shrink: 0;
		font-family: Alexandria;
		font-size: 16px;
		line-height: initial;
		font-weight: 300;
		color: #161616;
	}

	@media only screen and (max-width: 1024px) {
		.technical-details-area .feature-list-main-wrapper {
			flex-wrap: wrap;
		}
		.technical-details-area .feature-list-main-wrapper .feature-list-card .feature-list-desc {
			width: 75%;
		}
	}
	@media only screen and (max-width: 575px) {
		.technical-details-area {
			padding: 70px 0;
		}
		.technical-details-area .feature-list-main-wrapper {
			flex-wrap: wrap;
		}
		.technical-details-area .feature-list-main-wrapper .feature-list-card .feature-list-desc {
			width: 55%;
		}
		.technical-details-area .feature-list-btn-wrapper .popup-form-btn {
			padding: 10px 16px;
		}
	}
	
	
	/* our-products-area */
	.our-products-area {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
	}
	.our-products-area .image-card-wrapper.style-two {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		column-gap: 20px;
		row-gap: 24px;
	}
	.our-products-area .image-card-wrapper.style-two .image-card.style-two {
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 20px;
		width: 100%;
		height: 100%;
		padding: 12px 12px 20px;
		border: 1px solid #00BDE7;
		border-radius: 12px;
	}
	.our-products-area .image-card-wrapper.style-two .image-card.style-two .image-card-image {
		display: flex;
		width: 100%;
		height: 280px;
		border-radius: 8px;
		overflow: hidden;
	}
	.our-products-area .image-card-wrapper.style-two .image-card.style-two .image-card-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.our-products-area .image-card-wrapper.style-two .image-card.style-two .image-card-content-wrapper {
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: 16px;
	}
	.our-products-area .image-card-wrapper .image-card.style-two .image-card-content-wrapper .image-card-title {
		font-family: Alexandria;
		font-size: 32px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
		text-align: center;
	}
	.our-products-area .image-card-btn-wrapper {
		display: flex;
		justify-content: center;
		margin-top: 40px;
	}
	.our-products-area .image-card-btn-wrapper .popup-form-btn {
		padding: 14px 30px;
		font-weight: 400;
	}

	@media only screen and (max-width: 767px) {
		.our-products-area {
			padding: 70px 0;
		}
		.our-products-area .image-card-wrapper.style-two {
			grid-template-columns: repeat(1, 1fr);
		}
		.our-products-area .image-card-btn-wrapper .popup-form-btn {
			padding: 10px 16px;
			font-size: 16px;
			line-height: initial;
		}
	}
	
	/* Custom Solutions Section */
	.custom-solutions-area {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
	}
	.custom-solutions-area .icon-card-wrapper {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		column-gap: 20px;
		row-gap: 20px;
	}
	.icon-card-wrapper .icon-card {
		display: flex;
		align-items: flex-start;
		gap: 20px;
		width: 100%;
		height: 100%;
		padding: 24px 20px;
		background-color: #F0F0F0;
		border-radius: 12px;
	}
	.icon-card-wrapper .icon-card .icon-card-image {
		display: flex;
		width: 214px;
		height: 214px;
		border-radius: 50%;
		overflow: hidden;
		flex-shrink: 0;
	}
	.icon-card-wrapper .icon-card .icon-card-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.icon-card-wrapper .icon-card .icon-card-content-wrapper {
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: 16px;
	}
	.icon-card-wrapper .icon-card .icon-card-content-wrapper .icon-card-title {
		font-family: Alexandria;
		font-size: 24px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
		letter-spacing: -0.72px;
	}
	.icon-card-wrapper .icon-card .icon-card-content-wrapper .icon-card-desc {
		font-family: Alexandria;
		font-size: 16px;
		line-height: 24px;
		font-weight: 300;
		text-align: justify;
		color: #161616;
	}
	.custom-solutions-area .icon-card-btn-wrapper {
		display: flex;
		justify-content: center;
		margin-top: 40px;
	}
	.custom-solutions-area .icon-card-btn-wrapper .popup-form-btn {
		padding: 14px 30px;
		font-size: 16px;
		font-weight: 400;
		line-height: initial;
	}

	@media only screen and (max-width: 767px) {
		.custom-solutions-area {
			padding: 70px 0;
		}
		.custom-solutions-area .icon-card-wrapper {
			grid-template-columns: repeat(1, 1fr);
		}
		.icon-card-wrapper .icon-card {
			flex-direction: column;
		}
		.custom-solutions-area .icon-card-btn-wrapper .popup-form-btn {
			padding: 10px 16px;
		}
	}
	
	
	/* Important Safety section */
	.important-safety-area {
		padding: 70px 0;
		overflow: hidden;
		background-color: #F0F0F0;
		max-width: 1920px;
		margin: 0 auto;
	}
	.important-safety-area .info-image-wrapper {
		margin-bottom: 40px;
	}
	.important-safety-area .info-image-wrapper .info-image {
		width: 100%;
		height: 640px;
		display: flex;
		overflow: hidden;
	}
	.important-safety-area .info-image-wrapper .info-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.important-safety-area .info-card-wrapper {
		display: grid;
		grid-template-columns: repeat(6, 1fr);
		grid-auto-rows: 1fr;
	}
	.important-safety-area .info-card-wrapper .info-card {
		width: 100%;
		height: 100%;
		padding: 16px;
		background-color: #1E88E5;
	}
	.important-safety-area .info-card-wrapper .info-card:nth-child(4) {
		background-color: #1565C0;
	}
	.important-safety-area .info-card-wrapper .info-card.first-item {
		background-color: #FFF;
		justify-content: center;
	}
	.important-safety-area .info-card-wrapper .info-card.custom-color {
		background-color: #1976D2;
	}
	.important-safety-area .info-card-wrapper .info-card .info-card-content {
		width: 100%;
		height: 100%;
		display: flex;
		flex-direction: column;
		gap: 12px;
	}
	.important-safety-area .info-card-wrapper .info-card .info-card-title {
		font-family: Alexandria;
		font-size: 20px;
		line-height: initial;
		font-weight: 500;
		color: #FFF;
	}
	.important-safety-area .info-card-wrapper .info-card.first-item .info-card-title {
		font-size: 30px;
		color: #353535;
		text-align: center;
	}
	.important-safety-area .info-card-wrapper .info-card .info-card-desc {
		font-family: Alexandria;
		font-size: 16px;
		line-height: 24px;
		font-weight: 300;
		color: #FFF;
	}

	@media only screen and (max-width: 1024px) {
		.important-safety-area .info-card-wrapper {
			grid-template-columns: repeat(3, 1fr);
		}
		.important-safety-area .info-image-wrapper .info-image {
			height: 500px;
		}
	}
	@media only screen and (max-width: 767px) {
		.important-safety-area {
			padding: 70px 0;
		}
		.important-safety-area .info-card-wrapper {
			grid-template-columns: repeat(2, 1fr);
		}
		.important-safety-area .info-image-wrapper .info-image {
			height: 300px;
		}
	}
	@media only screen and (max-width: 575px) {
		.important-safety-area .info-card-wrapper {
			grid-template-columns: repeat(1, 1fr);
		}
	}
	
	/* Recommended Components section */
	.recommended-components-area {
		padding: 70px 16px;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
		background-color: #F0F0F0;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card-wrapper {
		display: flex;
		flex-direction: column;
		border-radius: 12px;
		overflow: hidden;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card-wrapper .feature-list-card {
		display: flex;
		align-items: center;
		gap: 40px;
		background-color: #FFF;
		padding: 20px;
		border-bottom: 0.5px solid #37373750;
		min-height: 80px;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card-wrapper .feature-list-card:last-child {
		border-bottom-color: transparent;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card-wrapper .feature-list-card.feature-list-card-header {
		background-color: #00BDE7;
		min-height: 64px;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card .feature-list-title {
		width: 200px;
		flex-shrink: 0;
		font-family: Alexandria;
		font-size: 16px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card.feature-list-card-header .feature-list-title {
		font-size: 20px;
		color: #FFF;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card .feature-list-desc {
		width: 100%;
		font-family: Alexandria;
		font-size: 16px;
		line-height: initial;
		font-weight: 300;
		color: #161616;
	}
	.recommended-components-area .feature-list-main-wrapper .feature-list-card.feature-list-card-header .feature-list-desc {
		font-size: 20px;
		color: #FFF;
	}
	.recommended-components-area .image-grid-wrapper {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		column-gap: 20px;
		row-gap: 24px;
		margin-top: 40px;
	}
	.recommended-components-area .image-grid-item {
		display: flex;
		flex-direction: column;
		gap: 20px;
		justify-content: center;
	}
	.recommended-components-area .image-grid-item .image {
		display: flex;
		width: 100%;
		aspect-ratio: 2.8/2.4;
		border-radius: 12px;
		overflow: hidden;
	}
	.recommended-components-area .image-grid-item .image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.recommended-components-area .image-grid-item .title {
		font-family: Alexandria;
		font-size: 24px;
		line-height: initial;
		font-weight: 300;
		color: #16529B;
		text-align: center;
	}

	@media only screen and (max-width: 767px) {
		.recommended-components-area {
			padding: 70px 0;
		}
		.recommended-components-area .feature-list-main-wrapper .feature-list-card .feature-list-title {
			width: 100px;
		}
		.recommended-components-area .image-grid-wrapper {
			grid-template-columns: repeat(2, 1fr);
		}
	}
	@media only screen and (max-width: 575px) {
		.recommended-components-area .image-grid-wrapper {
			grid-template-columns: repeat(1, 1fr);
		}
	}
	
	
	/* Feature List Section */
	.feature-list-area {
		padding: 70px 0;
		max-width: 1920px;
		margin: 0 auto;
		overflow: hidden;
	}
	.feature-list-area .feature-list-main-wrapper {
		display: flex;
		align-items: center;
		gap: 20px;
	}
	.feature-list-area .feature-list-image-wrapper {
		display: flex;
		flex-direction: column;
		gap: 24px;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-image-wrapper .feature-list-image {
		display: flex;
		width: 100%;
		height: 447px;
		border-radius: 12px;
		overflow: hidden;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-image-wrapper .feature-list-btn-wrapper {
		display: flex;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-image-wrapper .feature-list-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-card-wrapper {
		display: flex;
		flex-direction: column;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-card-wrapper .feature-list-card {
		display: flex;
		align-items: center;
		gap: 20px;
		padding: 16px;
		min-height: 72px;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-card .feature-list-icon {
		width: 20px;
		height: 20px;
		display: flex;
		flex-shrink: 0;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-card .feature-list-icon svg {
		width: 100%;
		height: 100%;
	}
	.feature-list-area .feature-list-main-wrapper .feature-list-card .feature-list-title {
		width: 100%;
		font-family: Alexandria;
		font-size: 16px;
		line-height: initial;
		font-weight: 400;
		color: #161616;
	}

	@media only screen and (max-width: 767px) {
		.feature-list-area {
			padding: 70px 0 0;
		}
		.feature-list-area .feature-list-main-wrapper {
			flex-direction: column;
		}
		.feature-list-area .feature-list-main-wrapper .feature-list-image-wrapper .feature-list-image {
			height: 320px;
		}
	}
</style>


<!-- Hero Section -->
     <div class="hero-area" style="background: url('https://www.ql-custom.com/wp-content/uploads/2025/08/9dde8e66565e20c6faa67a2e59c38af14c2cd348-1.png')">
		  <div class="hero-container mx-auto">
				<div class="hero-content-wrapper">
					<span class="hero-sub-title">
						QL-Custom Technology Ltd 
					</span>
					<h1 class="hero-title">
						Control panel wire harness
					</h1>
					<p class="hero-desc">QL-Custom delivers custom wiring harnesses, pigtails, and components for OEMs with 100% quality assurance and 96% on-time delivery. Our automotive harnesses are built to original specs with full design support and strict quality control.</p>

					<div class="hero-btn-wrapper">
						<?php
							echo do_shortcode('[filled_rounded_corner_button url="#popup-form" text="Get a Quick Quote"]');
						?>
					</div>
				</div>
<!-- 			  <div class="hero-image">
				  <img src="https://cornflowerblue-rhinoceros-500441.hostingersite.com/wp-content/uploads/2025/07/d12a86ebb40c037b2fe74c53540cd9c53812fa7d-1.png" alt="banner image">
			  </div> -->
		 </div>
     </div>

<!-- About Section -->
     <div class="about-area">
		  <div class="container mx-auto">
			  <div class="about-wrapper">
				<div class="about-content-wrapper">
					<p>A control panel wire harness is a bundle of wires tied together neatly and safely. These wires carry power and signals from one part of a machine to another. You can think of it like a set of veins for machines, helping them send energy and messages where they need to go. Depending on their use, these harnesses can be short or long, thin or thick. They are made to keep the wires tidy and to make fixing or checking the machine much easier. You can find these harnesses inside houses, cars, significant buildings, factory machines, and many tools used daily.</p>
					<p>At QL-Custom Technology Ltd., we proudly make control panel wire harnesses that are very strong, safe to use, and simple for everyone to set up. These harnesses are used in control panels and many types of machines. A control panel wire harness is a group of wires in one clean bundle. It helps make wiring much easier, faster, and neater. Whether you need a simple group of wires or a special setup with plugs, sensors, and labels, we can build it just for you. Our team designs each harness to fit your machine, last a long time, and work safely daily. We also reply fast, give you clear answers, and share price quotes quickly to help you move forward without delay.</p>

					<?php
						echo do_shortcode('[filled_rounded_corner_button url="#popup-form" text="Get a Quick Quote"]');
					?>
				</div>
				<div class="about-image-wrapper">
					<div class="image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/45134854c2e0ca4738da32e5166ad3bb202faf1e.png" alt="" />
					</div>
				</div>
			</div>
		 </div>
     </div>


	<!-- Why Choose Our Control -->
      <div class="why-choose-section">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Why Choose Our Control Panel Wire Harness?</h2>
			</div>
			<div class="info-card-wrapper">
				<div class="info-card">
					<div class="info-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/image-16.png" alt="">
					</div>
					<div class="info-card-content-wrapper">
						<h3 class="info-card-title">Tailor-Made Design</h3>
						<p class="info-card-desc">We make every control panel wire harness based on what you need. That means we choose the right length of wires, the correct thickness, and the right type of connectors. When the harness is made to match your control panel, it will fit better and work better. This also helps you avoid problems during setup and reduces the chance of any mistakes.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/image-17.png" alt="">
					</div>
					<div class="info-card-content-wrapper">
						<h3 class="info-card-title">Certified Quality</h3>
						<p class="info-card-desc">Our harnesses are built in clean, safe factories that follow stringent safety rules. We follow rules like ISO 9001 and UL 508A. Before we send any harness out, we test all the parts, wires, and connectors. This helps you know the harness is safe, strong, and ready to use.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/O1CN01L4imWK1kEfUwm2dJi_2216085554652-0-cib.png" alt="">
					</div>
					<div class="info-card-content-wrapper">
						<h3 class="info-card-title">Fast Turnaround</h3>
						<p class="info-card-desc">We understand your time is crucial. That’s why we try to move fast. We can send test samples quickly, and our team is always ready to answer your questions. If you have a short deadline, we can speed things up to help you stay on track.</p>
					</div>
				</div>
			</div>
		</div>
      </div>

	<!-- Our Custom cable -->
      <div class="our-custom-cable-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Our Custom Cable Solutions</h2>
			</div>
			<div class="image-card-wrapper">
				<div class="image-card">
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">Customized Wire and Cable Services</h4>
						<p class="image-card-desc">We can build many types of harnesses. Some are small and simple, and some are big and complex. No matter what size or shape you need, we use high-quality wires and safe connectors. Every harness is made to match your job.</p>
					</div>
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/34ac20217f3a6b135a5f068678e3c5ab05ddc720-min.png" alt="">
					</div>
				</div>
				<div class="image-card">
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/dbaefc0f9b341a8e275d20c32950d84b509a8c92-2-min.png" alt="">
					</div>
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">OEM Cable Manufacturing</h4>
						<p class="image-card-desc">If your company builds machines, we can take care of everything. QL-Custom Technology Ltd., is the exact OEM Cable Harness Manufacturer for you. We buy the parts, make the harness, and test it thoroughly. You don’t need to work with many different OEM Cable Harness Manufacturers. We do it all, so your process is simple and easy.</p>
					</div>
				</div>
				<div class="image-card">
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">Rapid Prototyping and Design</h4>
						<p class="image-card-desc">We use special design tools like CAD software to help plan your harness. We can also make a small sample quickly. You can test it before you order more. This enables you to make sure it fits and works just right.</p>
					</div>
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/5d646d32c7fbc6b06173d9fb8d74a67801cf4b72-min.png" alt="">
					</div>
				</div>
			</div>
		</div>
      </div>


	<!-- Technical Details section -->
      <div class="technical-details-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Technical Details We Follow</h2>
			</div>
			<div class="feature-list-main-wrapper">
				<div class="feature-list-card-wrapper">
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Gauge Range
						</h5>
						<p class="feature-list-desc">
							Wires can be very thin (18 gauge) or thick (10 gauge), depending on the need.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Current Capacity
						</h5>
						<p class="feature-list-desc">
							The harness can carry between 15 and 30 amps of current
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Temperature Range
						</h5>
						<p class="feature-list-desc">
							Can be used in places as cold as -40°C or as hot as +125°C
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Connector
						</h5>
						<p class="feature-list-desc">
							Connectors like crimp or push-lock are used; UL-approved plugs are common
						</p>
					</li>
					<div class="feature-list-btn-wrapper">
						<?php
							echo do_shortcode('[filled_rounded_corner_button url="#popup-form" text="Get a Quick Quote"]');
						?>
					</div>
				</div>
				<div class="feature-list-card-wrapper">
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Voltage Rating
						</h5>
						<p class="feature-list-desc">
							The wires can handle between 300 and 600 volts of electricity
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Insulation Types
						</h5>
						<p class="feature-list-desc">
							Wires are safely covered using PVC, XLPE, PTFE, or Teflon
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Shielding
						</h5>
						<p class="feature-list-desc">
							Special layers are added to stop signal noise and keep the wires clean
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Certifications
						</h5>
						<p class="feature-list-desc">
							Standards like UL 508A, RoHS, CE, ISO 9001, UL 94V-0 are followed
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Ingress Protection
						</h5>
						<p class="feature-list-desc">
							Rated IP67 or IP68 to stop water and dirt from getting inside
						</p>
					</li>
				</div>
			</div>
		</div>
      </div>


	<!-- Out product section -->
      <div class="our-products-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Uses of Control Panel Wire Harnesses</h2>
			</div>
			<div class="image-card-wrapper style-two">
				<div class="image-card style-two">
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/7307b2513acabae37f6625ed0f6e8df2b12bf17c-2.jpg" alt="">
					</div>
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">Industrial Machinery</h4>
						<p class="image-card-desc">Machines in large factories need harnesses to work correctly. These harnesses connect power, control buttons, motors, and sensors. For example, a robot arm on a factory floor cannot move correctly without a control panel wire harness. Industrial Control Wiring Solutions send signals and energy that make the arm move safely and do its job right.</p>
					</div>
				</div>
				<div class="image-card style-two">
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/b929351efc606676ac702f825b6d1b3ac30f3764-2.jpg" alt="">
					</div>
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">Automotive</h4>
						<p class="image-card-desc">Cars and buses, especially electric ones, need strong and flexible Custom Electrical Wiring Harnesses. These Custom electrical wiring harnesses help the vehicle’s wires stay in place while it moves over bumps. They also connect headlights, dashboards, and charging systems, so everything works properly.</p>
					</div>
				</div>
				<div class="image-card style-two">
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/2c4e3a2c00e800aa91be4e36a125b323be5c8ed7-1.png" alt="">
					</div>
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">HVAC</h4>
						<p class="image-card-desc">Building heating and cooling systems use control panel wire harnesses to link different parts, like thermostats, fans, and control units. Harnesses make these systems easier to set up and fix. You’ll see them in homes, shops, hospitals, malls, etc.</p>
					</div>
				</div>
				<div class="image-card style-two">
					<div class="image-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/5ecee0ca003072ee210f9f1a0bb73f8c6bca322c-2.jpg" alt="">
					</div>
					<div class="image-card-content-wrapper">
						<h4 class="image-card-title">Medical</h4>
						<p class="image-card-desc">Medical tools in hospitals and even devices at home use harnesses to stay safe and work well. These harnesses follow strict rules to protect people from harm. Things like lab machines, hospital beds, or home monitors use them.</p>
					</div>
				</div>
			</div>
			  <div class="image-card-btn-wrapper">
				  <?php
						echo do_shortcode('[filled_rounded_corner_button url="#popup-form" text="Get a Quick Quote"]');
					?>
			  </div>
		</div>
      </div>


<!-- Important Safety Section -->
      <div class="important-safety-area">
		  <div class="container-full mx-auto">
			<div class="section-title">
				<h2>Important Safety Standards</h2>
			</div>
			<div class="info-image-wrapper">
				<div class="info-image">
					<img src="https://www.ql-custom.com/wp-content/uploads/2025/07/960b4d623f785ba8d71dcbe2e173fdb7ebcfde52-scaled.jpg" alt="Important Safety Standards">
				</div>
			</div>
			<div class="info-card-wrapper">
				<div class="info-card first-item">
					<h3 class="info-card-title">Important Rules</h3>
				</div>
				<div class="info-card">
					<div class="info-card-content">
						<h3 class="info-card-title">UL 508A and NFPA 79</h3>
						<p class="info-card-desc">These rules explain how to make control panel wire harnesses safe for factory machines. They say the wires must be copper, grounded well, and designed with clear plans.</p>
					</div>
				</div>
				<div class="info-card custom-color">
					<div class="info-card-content">
						<h3 class="info-card-title">CE and RoHS </h3>
						<p class="info-card-desc">To sell harnesses in Europe, they must follow CE and RoHS rules. These help protect users and the environment by ensuring the harness has no dangerous materials.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-content">
						<h3 class="info-card-title">ISO 9001 (Global Quality Standard)</h3>
						<p class="info-card-desc">This shows the harness maker builds every product in the same high-quality way. It’s essential for industries like cars, planes, and heavy machinery.</p>
					</div>
				</div>
				<div class="info-card custom-color">
					<div class="info-card-content">
						<h3 class="info-card-title">Strong and Tough Ratings</h3>
						<p class="info-card-desc">Harnesses must survive water, heat, cold, and dust. Ratings like IP67 and IP68 prove they can. Some also need to pass fire safety rules and military-grade toughness.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-content">
						<h3 class="info-card-title">Other Useful Standards</h3>
						<p class="info-card-desc">There are more rules, like UL 758 and IEC 61076. A good maker will know all these and use them as needed.</p>
					</div>
				</div>
			</div>
		</div>
      </div>


	<!-- Custom Solutions section -->
      <div class="custom-solutions-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Custom Solutions for Every Application</h2>
			</div>
			<div class="icon-card-wrapper">
				<div class="icon-card">
					<div class="icon-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/db9ad41a208296e62c9423bcba98dd54d39aa6af.png" alt="">
					</div>
					<div class="icon-card-content-wrapper">
						<h4 class="icon-card-title">Custom Design Services</h4>
						<p class="icon-card-desc">We work closely with you to make sure every harness fits your system. We use your plans or drawings to create a design that matches exactly. Then we tested it, so it worked well from the start.</p>
					</div>
				</div>
				<div class="icon-card">
					<div class="icon-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/Ellipse-1580.png" alt="">
					</div>
					<div class="icon-card-content-wrapper">
						<h4 class="icon-card-title">Labeling & Identification</h4>
						<p class="icon-card-desc">Every wire is clearly labelled. We also use colour codes that follow standard rules. This makes it easy to know where each wire goes. It helps during setup and makes fixing things easier later.</p>
					</div>
				</div>
				<div class="icon-card">
					<div class="icon-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/789a672810f47f91edbb9d23f2f34fb8e798317d.png" alt="">
					</div>
					<div class="icon-card-content-wrapper">
						<h4 class="icon-card-title">Control Panel Cable Assembly Int.</h4>
						<p class="icon-card-desc">When it arrives, we can build your Control Panel Cable Assembly harness so that it is already inside your panel. Or we can shape it to fit your panel perfectly so your team can install it fast. This saves a lot of time and effort.</p>
					</div>
				</div>
				<div class="icon-card">
					<div class="icon-card-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/db9ad41a208296e62c9423bcba98dd54d39aa6af.png" alt="">
					</div>
					<div class="icon-card-content-wrapper">
						<h4 class="icon-card-title">Connector Matching</h4>
						<p class="icon-card-desc">We have many kinds of connectors, like Molex and JST. We can use the same type you already use or help you choose a new one that fits the same way. All connectors are safe and tested.</p>
					</div>
				</div>
			</div>
		</div>
      </div>


	<!-- Recommended Components section -->
      <div class="recommended-components-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Recommended Components & Materials</h2>
			</div>
			<div class="feature-list-main-wrapper">
				<div class="feature-list-card-wrapper">
					<li class="feature-list-card feature-list-card-header">
						<h5 class="feature-list-title">
							Component
						</h5>
						<p class="feature-list-desc">
							What It Does
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Electronic Cable
						</h5>
						<p class="feature-list-desc">
							Copper wire with plastic coating to carry power or signals safely. These are vital for transferring power and signals. These Electronic  Cables are used in many places to run the systems smoothly.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Terminal Ends
						</h5>
						<p class="feature-list-desc">
							Metal pieces that connect to the wire ends to hold them in place. It connects all the wires into a single piece to flow the electricity and signal strongly.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							PVC Tubing
						</h5>
						<p class="feature-list-desc">
							Soft plastic that wraps wires to stop damage from bending or rubbing. It is vital for wires, it protects the wire against the weather and makes the wire last a long time.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Cable Ties
						</h5>
						<p class="feature-list-desc">
							Small straps that keep wires neat and hold them together. It keeps the wires in an exact spot. It is vital to keep the wires clean and avoid accidents.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Waterproof Connectors
						</h5>
						<p class="feature-list-desc">
							Special plugs that keep water and dirt out – suitable for outdoor use. Because of this product wires last for a long time and work better.
						</p>
					</li>
					<li class="feature-list-card">
						<h5 class="feature-list-title">
							Heat Shrink Sleeves
						</h5>
						<p class="feature-list-desc">
							Plastic that shrinks with heat to protect and seal wire connections. It takes the shape of the wire and protects it from outer odds. It creates an extra protection layer for the wires
						</p>
					</li>
				</div>
			</div>
			  <div class="image-grid-wrapper">
				  <div class="image-grid-item">
					  <div class="image">
						  <img src="https://www.ql-custom.com/wp-content/uploads/2025/08/8c83aff776ad37ba18afc85da65dd42855b8e975.png" alt="product image" >
					  </div>
					  <h4 class="title">
						  Electronic wire
					  </h4>
				  </div>
				  <div class="image-grid-item">
					  <div class="image">
						  <img src="https://www.ql-custom.com/wp-content/uploads/2025/08/3e48c34f79f8774e4eea4b5732168ff07da8739b.png" alt="product image" >
					  </div>
					  <h4 class="title">
						  Insulation sheath
					  </h4>
				  </div>
				  <div class="image-grid-item">
					  <div class="image">
						  <img src="https://www.ql-custom.com/wp-content/uploads/2025/08/3fcaf015a10c455d21e6a880af74e64f5705d481.png" alt="product image" >
					  </div>
					  <h4 class="title">
						  Connectors
					  </h4>
				  </div>
				  <div class="image-grid-item">
					  <div class="image">
						  <img src="https://www.ql-custom.com/wp-content/uploads/2025/08/bc3218aa0094ce0cb7b40fb5b977ad1884c149c8.png" alt="product image" >
					  </div>
					  <h4 class="title">
						  Strip rolling
					  </h4>
				  </div>
			  </div>
		</div>
      </div>


	  <!-- Feature List section -->
      <div class="feature-list-area">
		  <div class="container mx-auto">
			<div class="section-title">
				<h2>Ensure Custom Wire Harness for Control Panel Order</h2>
			</div>
			<div class="feature-list-main-wrapper">
				<div class="feature-list-image-wrapper">
					<div class="feature-list-image">
						<img src="https://www.ql-custom.com/wp-content/uploads/2025/08/c0b3e8e766c4eea04fa9d7de50ce47962223e6eb-1.jpg" alt="Feature List Image">
					</div>
					<div class="feature-list-btn-wrapper">
						  <?php
								echo do_shortcode('[filled_rounded_corner_button url="#popup-form" text="Get a Quick Quote"]');
							?>
					</div>
				</div>
				<div class="feature-list-card-wrapper">
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Do you have a precise drawing or layout of your control panel?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Have you decided what wire lengths and types you need?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Do you know what connectors (like Molex or JST) your system uses?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Do you need special labels or colour coding on your wires?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Will your harness need to be pre-installed or shaped to fit your panel?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Do you want a sample first before full production?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Are you aware of any industry certifications your harness must follow (like UL 508A)?
						</p>
					</li>
					<li class="feature-list-card">
						<span class="feature-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M18 14V2H6V14H18ZM20 14C20 14.5304 19.7893 15.0391 19.4142 15.4142C19.0391 15.7893 18.5304 16 18 16H6C4.89 16 4 15.1 4 14V2C4 0.89 4.89 0 6 0H18C18.5304 0 19.0391 0.210714 19.4142 0.585786C19.7893 0.960859 20 1.46957 20 2V14ZM14 18V20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V5H2V18H14Z" fill="#00BDE7"/>
							</svg>
						</span>
						<p class="feature-list-title">
							Do you need waterproof parts or outdoor-ready protection?
						</p>
					</li>
				</div>
			</div>
		</div>
      </div>

<!-- 🔹 FAQ Section -->
<?php 
$template_args = [
  'faqs' => [
    [
      'question' => 'What safety rules do your harnesses follow?',
      'answer'   => 'Our control panel wire harnesses follow big safety rules like UL 508A, RoHS, CE, and ISO 9001. These rules help make sure the control panel wire harness is safe and works well.'
    ],
    [
      'question' => 'How do you make sure the harness fits my panel?',
      'answer'   => 'We use your Wiring Harness for Electrical Panels drawing and design plans to build a control panel wire harness that fits just right. We check everything so the final harness matches your system.'
    ],
    [
      'question' => 'Can I get a sample to try before I order more?',
      'answer'   => 'Yes. We can send you a small test harness. You can check it and ensure it works before ordering a bigger amount.'
    ],
    [
      'question' => 'How long does it take to get my harness?',
      'answer'   => 'Most orders take a few weeks. But if you need it sooner, we can work faster. We also have rush service for urgent jobs.'
    ],
    [
      'question' => 'Do you give drawings or diagrams with the harness?',
      'answer'   => 'Yes. We provide simple 2D or 3D diagrams. These show you how to install the control panel wire harness and where each wire goes.'
    ],
    [
      'question' => 'Can you use the same connectors I already use?',
      'answer'   => 'Yes. We can use the same type or one that matches closely. You don’t need to change your current setup.'
    ],
    [
      'question' => 'Do you add labels or tags to the wires?',
      'answer'   => 'Yes. We can add names, barcodes, or tags to each wire or group. This helps you install and track them easily.'
    ],
  ]
];

set_query_var('faq_args', $template_args);
get_template_part('template-parts/custom_faq');

?>

<?php get_footer('template-parts/control_panel_footer.php'); ?>