ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `deleted_at_id` (`deleted_at`,`id`);
