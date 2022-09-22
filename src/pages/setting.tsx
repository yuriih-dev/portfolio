import React from 'react';

const SettingItem = ({ name }: { name: string }) => {
  const slug = name
    .toLowerCase()
    .replace(/ /g, '-')
    .replace(/[^\w-]+/g, '');

  const handleChange = async () => {
    let show = await localStorage.getItem(slug);
    if (show === null || show === 'true') {
      await localStorage.setItem(slug, 'true');
    } else {
      await localStorage.setItem(slug, 'false');
    }
  };

  return (
    <label className="mt-1" style={{ display: 'flex', alignItems: 'center', cursor: 'pointer' }}>
      <input type="checkbox" onChange={handleChange} />
      <span className="pl-2">{name}</span>
    </label>
  );
};

const SettingPage = () => {
  return (
    <div className="p-5">
      <SettingItem name="Havvi" />
      <SettingItem name="Framexperts" />
    </div>
  );
};

export default SettingPage;
